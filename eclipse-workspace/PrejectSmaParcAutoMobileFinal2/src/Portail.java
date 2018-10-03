import java.util.ArrayList;
import java.util.LinkedList;
import java.util.Queue;

import jade.core.AID;
import jade.core.Agent;
import jade.core.behaviours.Behaviour;
import jade.core.behaviours.CyclicBehaviour;
import jade.domain.DFService;
import jade.domain.FIPAException;
import jade.domain.FIPAAgentManagement.DFAgentDescription;
import jade.domain.FIPAAgentManagement.ServiceDescription;
import jade.lang.acl.ACLMessage;
import jade.lang.acl.MessageTemplate;
public class Portail  extends Agent {
	Boolean flag=false;
	Boolean flag1=false;
	private static String sendervoiture =null;
	private static String senderplace =null;
	private static Queue<String> Q;
	int etape=0;
	private static	DFAgentDescription [] PlaceS;
	private static ArrayList<String> listPlaceSPROPOSE=null;

	@Override
	protected void setup() {

		Q=new LinkedList<String>();

		listPlaceSPROPOSE=new ArrayList<String>();
		addBehaviour(new Behaviour() {
			int k=0;
			@Override
			public boolean done() {
				// TODO Auto-generated method stub
				return false;

			}

			@Override
			public void action() {
				// TODO Attendre le message de l'argent voiture de  types request
				
				MessageTemplate messageTemplate=MessageTemplate.MatchPerformative(ACLMessage.REQUEST);

				ACLMessage msg ;
				//msg=receive();
				msg=receive(messageTemplate);

				if (msg != null){
					
					System.out.println ("j'ai reçu la Request : "+msg.getContent());
					sendervoiture=msg.getSender().getLocalName();
					flag=true;	
					// TODO Agent portail envoyer 5 messages à les argents place 
					
					for (int i = 1; i <6; i++) {
						ACLMessage msg2 = new ACLMessage(ACLMessage.REQUEST);
						msg2.setContent(getAgent().getLocalName());
						AID receiver = new AID("Place"+i, AID.ISLOCALNAME);
						msg2.addReceiver(receiver);
						send(msg2);
					}
					
		
					
					// TODO Auto-generated method stub
					//ENREGISTREMENT DANS LA PAGE JAUNE
					DFAgentDescription dfd = new  DFAgentDescription(); // DESCRIPTION DE L'AGENT
					dfd.setName(getAID());
					//DESCRIPTION DE SERVICE
					ServiceDescription sd = new ServiceDescription();
					sd.setType("Servir control"); // TYPE DU SERVICE OFFERT
					sd.setName("service de control");
					dfd.addServices(sd);

					//ESSAYER D'ENREGISTRER LES BOISSONS
					try {
						//DFService.register(this, dfd);			

						PlaceS=DFService.search(myAgent, dfd);
					} 
					catch (FIPAException fe) { fe.printStackTrace(); }
					for (int j = 0; j < PlaceS.length; j++) {
						System.err.println(PlaceS[j].getName().getLocalName());
					} 
					
					// TODO sélectionner juste les messages de l'argent place du type propose
					testPlasse(ACLMessage.PROPOSE);

					
addBehaviour(new CyclicBehaviour() {
	
	@Override
	public void action() {
		// TODO Auto-generated method stub
		
		MessageTemplate mt2 = MessageTemplate.MatchPerformative(ACLMessage.INFORM);
		ACLMessage mssg3 = myAgent.receive(mt2);
		
		if (mssg3 != null){
			if (!Q.isEmpty()) {
				System.out.println ("j'ai reçu la Request : "+mssg3.getContent());
				senderplace=mssg3.getSender().getLocalName();
				ACLMessage msg2 = new ACLMessage(ACLMessage.ACCEPT_PROPOSAL);
				msg2.setContent(senderplace);
				AID receiver = new AID(Q.poll(), AID.ISLOCALNAME);
				msg2.addReceiver(receiver);
				send(msg2);
				flag=true;	
			}
			
		}
		else {        
			if(flag==false) {
				System.out.println ("je n'ai pas encore reçu de message Test etat de la place"+getAgent().getLocalName());
				block();
			}
		}
	}
});
	

				}

				else {        
					if(flag==false) {
						System.out.println ("je n'ai pas encore reçu de message Test "+getAgent().getLocalName());
						block();
					}
				}

				k++;

				//####################################################

			}

			public void testPlasse(int typeMessag) {
				// sélectionner juste les messages de l'argent place du type propose

				MessageTemplate mt = MessageTemplate.MatchPerformative(typeMessag);
				ACLMessage mssg = myAgent.receive(mt);
				if (mssg != null){
					System.out.println ("j'ai reçu la Request : "+mssg.getContent());
					senderplace=mssg.getSender().getLocalName();
					listPlaceSPROPOSE.add(senderplace);

					flag=true;
				}
				else {        
					if(flag==false) {
						System.out.println ("je n'ai pas encore reçu de message Test etat de la place"+getAgent().getLocalName());
						block();
					}
				}
// TODO vérifier le nombre de places disponibles
				if (listPlaceSPROPOSE.size()>0) {
					ACLMessage msg2 = new ACLMessage(ACLMessage.ACCEPT_PROPOSAL);
					msg2.setContent(listPlaceSPROPOSE.get(listPlaceSPROPOSE.size()-1));
					//msg2.setContent("Place5");

					AID receiver = new AID(sendervoiture, AID.ISLOCALNAME);
					msg2.addReceiver(receiver);
					send(msg2);
				} else {
					ACLMessage msg2 = new ACLMessage(ACLMessage.FAILURE);
					msg2.setContent("///////////////////////////////////////////");
					AID receiver = new AID(sendervoiture, AID.ISLOCALNAME);
					Q.offer(sendervoiture);
					// filedAttente.add(sendervoiture);
					msg2.addReceiver(receiver);
					send(msg2);

				}
				listPlaceSPROPOSE.clear();
			}
		});



	}

	











}


