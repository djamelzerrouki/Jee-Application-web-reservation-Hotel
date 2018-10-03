import jade.core.AID;
import jade.core.Agent;
import jade.core.behaviours.Behaviour;
import jade.domain.DFService;
import jade.domain.FIPAException;
import jade.domain.FIPAAgentManagement.DFAgentDescription;
import jade.domain.FIPAAgentManagement.ServiceDescription;
import jade.lang.acl.ACLMessage;
import jade.lang.acl.MessageTemplate;
import jade.wrapper.ControllerException;

public class Place extends Agent {
	Boolean flag=false;
	private static String sender ;
	private static String senderV ;
	//	etat de la place occupée ou libre.
	private static String etat="libre" ;
	@Override
	protected void setup() {
		//ENREGISTREMENT DANS LA PAGE JAUNE
		publierServicePlace();
addBehaviour(new Behaviour() {
@Override
			public boolean done() {
				// TODO Auto-generated method stub
				return false;
			}
@Override
			public void action() {
// TODO filtrer les messages de l'argent portail de type request
MessageTemplate mt = MessageTemplate.MatchPerformative(ACLMessage.REQUEST);
				ACLMessage msg = myAgent.receive(mt);
				if (msg != null){
					//TODO test l'État de la place occupé au libre.
					testEtat(msg);
					//TODO changer d'état de place au l'état occupée
					occupyPlace();
					//TODO changer d'état de place au l'état libre
					releasedPlace();
				}
				else {        
					if(flag==false) {
						System.out.println ("je n'ai pas encore reçu de message Test "+getAgent().getLocalName());
						block();
					}
				}
			}
			private void releasedPlace() {
				addBehaviour(new Behaviour() {

					@Override
					public boolean done() {
						// TODO Auto-generated method stub
						return false;
					}

					@Override
					public void action() {
						// TODO Auto-generated method stub
						MessageTemplate mt = MessageTemplate.MatchPerformative(ACLMessage.INFORM);
						ACLMessage mssg = myAgent.receive(mt);
						if (mssg != null){
							senderV=mssg.getContent();
							System.out.println ("j'ai reçu la Request : "+senderV);
							etat="libre";
							flag=true;


							ACLMessage msg2 = new ACLMessage(ACLMessage.INFORM);
							msg2.setContent(getAgent().getLocalName());
							AID receiver = new AID(sender, AID.ISLOCALNAME);
							msg2.addReceiver(receiver);
							send(msg2);	


						}
						else {        
							if(flag==false) {
								System.out.println ("je n'ai pas reçu le message de la Portail"+getAgent().getLocalName());
								block();
							}
						}	
					}
				});
			}
			private void occupyPlace() {
				addBehaviour(new Behaviour() {

					@Override
					public boolean done() {
						// TODO Auto-generated method stub
						return false;
					}

					@Override
					public void action() {
						// TODO Auto-generated method stub
						MessageTemplate mt = MessageTemplate.MatchPerformative(ACLMessage.CONFIRM);
						ACLMessage mssg = myAgent.receive(mt);
						if (mssg != null){
							senderV=mssg.getContent();
							System.out.println ("j'ai reçu la Request : "+senderV);
							etat="occupée";
							flag=true;
						}
						else {        
							if(flag==false) {
								System.out.println ("je n'ai pas reçu le message de la Portail"+getAgent().getLocalName());
								block();
							}
						}	
					}
				});
			}
			private void testEtat(ACLMessage msg) {
				System.out.println ("j'ai reçu la Request : "+msg.getContent());
				sender=msg.getSender().getLocalName();
				flag=true;	
				// TODO l'agent place va tester leur état
				if (etat.equals("libre")) {
					ACLMessage msg2 = new ACLMessage(ACLMessage.PROPOSE);
					msg2.setContent(getAgent().getLocalName());
					AID receiver = new AID(sender, AID.ISLOCALNAME);
					System.out.println("Bonjour je suis l'agent: "+getLocalName()+ " Votre message a bien été reçu");
					msg2.addReceiver(receiver);
					send(msg2);

				} else if (etat.equals("occupee")) {
					ACLMessage msg3 = new ACLMessage(ACLMessage.REFUSE);
					msg3.setContent("Refuse");
					AID receiver = new AID(sender, AID.ISLOCALNAME);
					msg3.addReceiver(receiver);
					send(msg3);
				}
			}
		});

	}
	private void publierServicePlace() {
		//ENREGISTREMENT DANS LA PAGE JAUNE
		DFAgentDescription dfd = new  DFAgentDescription(); // DESCRIPTION DE L'AGENT
		dfd.setName(getAID());
		ServiceDescription sd = new ServiceDescription();	//DESCRIPTION DE SERVICE
		sd.setType("Servir control"); // TYPE DU SERVICE OFFERT
		sd.setName("service de control");
		dfd.addServices(sd);

		try {
			DFService.register(this, dfd);			
		} 
		catch (FIPAException fe) { fe.printStackTrace(); }
	}
	@Override
	protected void beforeMove() {
		try {
			System.out.println(" Avant Migration de l'agent "+this.getAID().getName()
					+" \n vers"+this.getContainerController().getContainerName());
		} catch (ControllerException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}


	}
	@Override
	protected void afterMove() {



	}
	@Override
	protected void takeDown() {
		System.out.println(" l'agent "+this.getAID().getName()+" va mourir");


	}



}
