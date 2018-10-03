import jade.core.AID;
import jade.core.Agent;
import jade.core.behaviours.Behaviour;
import jade.core.behaviours.OneShotBehaviour;
import jade.lang.acl.ACLMessage;
import jade.lang.acl.MessageTemplate;

public class Voitures  extends Agent {
	private static final String receiverPortail="Portail" ;
	boolean flag=false;
	private static String NomV;
	@Override
	protected void setup() {
		doWait(20000);
	long randomNum =  0 + (long)(Math.random() * 10000);
		doWait(randomNum);

		addBehaviour(new  OneShotBehaviour() {
                @Override
			public void action()  {
				// TODO Envoyer message l'argent portail de type REQUEST
				sendMessageToDoor();
				// TODO Déplacer les objets vers la portail  
				DesignGoToDoor();
				//TODO L'attente de réponse de l'argent  portail
				responseMessagesFromDoor();
			}
			private void sendMessageToDoor() {
				// TODO envoyer message l'argent portail de type REQUEST

				ACLMessage msg = new ACLMessage(ACLMessage.REQUEST);
				msg.setContent(getAgent().getLocalName());
				AID receiver = new AID(receiverPortail, AID.ISLOCALNAME);
				msg.addReceiver(receiver);
				send(msg);
			}
			private void responseMessagesFromDoor() {
				//TODO l'attente de réponse de l'argent  portail
				addBehaviour(new Behaviour() {

					@Override
					public boolean done() {
						// TODO Auto-generated method stub
						return false;
					}

					@Override
					public void action() {

						// TODO  filtrer ---> juste les messages ACCEPT_PROPOSAL
						MessageTemplate mt = MessageTemplate.MatchPerformative(ACLMessage.ACCEPT_PROPOSAL);
						ACLMessage mssg = myAgent.receive(mt);
						if (mssg != null){
							final String placeEnvouy=mssg.getContent().trim();
							System.err.println (getAgent().getLocalName()+" j'ai reçu la Request : "+placeEnvouy);
							flag=true;

							ACLMessage msg = new ACLMessage(ACLMessage.CONFIRM);
							msg.setContent(getAgent().getLocalName());
							AID receiver = new AID(placeEnvouy, AID.ISLOCALNAME);
							msg.addReceiver(receiver);
							send(msg);


							DesignGoToDoor();

							doWait(2100);

							DisagnGoToplaceAgent(placeEnvouy);
							doWaitInPlace(placeEnvouy);
                    

							ACLMessage msg2 = new ACLMessage(ACLMessage.INFORM);
							msg2.setContent(getAgent().getLocalName());
							msg2.addReceiver(receiver);
							send(msg2);

							theCarExite();


						}
						else {        
							if(flag==false) {
								System.out.println ("je n'ai pas reçu le message de la Portail"+getAgent().getLocalName());
								block();
							}
						}	
					}

					private void doWaitInPlace(String placeEnvouy) {
						try {
							//Voiture
							NomV=getAgent().getLocalName();
							
							switch (NomV) {
							case "Voiture1":{
								  MyContanarevoitures.chrono.Name=((MyContanarevoitures.ordre++)+"=> Voiture1 sur la "+placeEnvouy+" ");
						        MyContanarevoitures.chrono.play();
								doWait(60000);
	                            MyContanarevoitures.chrono.stop();

								break; }
							case "Voiture2":{
								  MyContanarevoitures.chrono2.Name=((MyContanarevoitures.ordre++)+"=> Voiture2 sur la "+placeEnvouy+" ");

						        MyContanarevoitures.chrono2.play();
								doWait(60000);
	                            MyContanarevoitures.chrono2.stop();

								break;
							}
							case "Voiture3":{
								  MyContanarevoitures.chrono3.Name=((MyContanarevoitures.ordre++)+"=> Voiture3 sur la "+placeEnvouy+" ");

						        MyContanarevoitures.chrono3.play();
								doWait(60000);
	                            MyContanarevoitures.chrono3.stop();

								break;
							}
							case "Voiture4":{
								  MyContanarevoitures.chrono4.Name=((MyContanarevoitures.ordre++)+"=> Voiture4 sur la "+placeEnvouy+" ");

						        MyContanarevoitures.chrono4.play();
								doWait(60000);
	                            MyContanarevoitures.chrono4.stop();

								break;
							}case "Voiture5":{
								  MyContanarevoitures.chrono5.Name=((MyContanarevoitures.ordre++)+"=> Voiture5 sur la "+placeEnvouy+" ");

						        MyContanarevoitures.chrono5.play();
								doWait(60000);
	                            MyContanarevoitures.chrono5.stop();

								break;
							}
							case "Voiture6":{
								  MyContanarevoitures.chrono6.Name=((MyContanarevoitures.ordre++)+"=> Voiture6 sur la "+placeEnvouy+" ");

						        MyContanarevoitures.chrono6.play();
								doWait(60000);
	                            MyContanarevoitures.chrono6.stop();
								break;
							}
							case "Voiture7":{
								  MyContanarevoitures.chrono7.Name=((MyContanarevoitures.ordre++)+"=> Voiture7 sur la "+placeEnvouy+" ");

						        MyContanarevoitures.chrono7.play();
								doWait(60000);
	                            MyContanarevoitures.chrono7.stop();
	                            break;
							}
							case "Voiture8":{					
								MyContanarevoitures.chrono8.Name=((MyContanarevoitures.ordre++)+"=> Voiture8 sur la "+placeEnvouy+" ");

						        MyContanarevoitures.chrono8.play();
								doWait(60000);
	                            MyContanarevoitures.chrono8.stop();
	                            break;
							}
							case "Voiture9":{						
								MyContanarevoitures.chrono9.Name=((MyContanarevoitures.ordre++)+"=> Voiture9 sur la "+placeEnvouy+" ");

						        MyContanarevoitures.chrono9.play();
								doWait(60000);
	                            MyContanarevoitures.chrono9.stop();
	                            break;
							}case "Voiture10":{	
								MyContanarevoitures.chrono10.Name=((MyContanarevoitures.ordre++)+"=> Voiture10 sur la "+placeEnvouy+" ");

						        MyContanarevoitures.chrono10.play();
								doWait(60000);
	                            MyContanarevoitures.chrono10.stop();
	                            break;
							}

							}


						} catch (Exception e) {
							// TODO Auto-generated catch block
							e.printStackTrace();
						}
					}
					private void theCarExite() {
						try {
							//Voiture
							NomV=getAgent().getLocalName();
							switch (NomV) {
							case "Voiture1":{
								MyContanarevoitures.ExitTheDore(MyContanarevoitures.v1,350);
								doWait(2100);
								MyContanarevoitures.ExitTheParc(MyContanarevoitures.v1);


								break; }
							case "Voiture2":{

								MyContanarevoitures.ExitTheDore(MyContanarevoitures.v2,280);
								doWait(2100);
								MyContanarevoitures.ExitTheParc(MyContanarevoitures.v2);

								break;
							}
							case "Voiture3":{
								MyContanarevoitures.ExitTheDore(MyContanarevoitures.v3,210);
								doWait(2100);
								MyContanarevoitures.ExitTheParc(MyContanarevoitures.v3);

								break;
							}
							case "Voiture4":{
								MyContanarevoitures.ExitTheDore(MyContanarevoitures.v4,140);
								doWait(2100);
								MyContanarevoitures.ExitTheParc(MyContanarevoitures.v4);

								break;
							}case "Voiture5":{
								MyContanarevoitures.ExitTheDore(MyContanarevoitures.v5,70);
								doWait(2100);
								MyContanarevoitures.ExitTheParc(MyContanarevoitures.v5);

								break;
							}
							case "Voiture6":{
								MyContanarevoitures.ExitTheDore(MyContanarevoitures.v6,0);
								doWait(2100);
								MyContanarevoitures.ExitTheParc(MyContanarevoitures.v6);
								break;
							}
							case "Voiture7":{
								MyContanarevoitures.ExitTheDore(MyContanarevoitures.v7,-70);
								doWait(2100);
								MyContanarevoitures.ExitTheParc(MyContanarevoitures.v7);
								break;
							}
							case "Voiture8":{
								MyContanarevoitures.ExitTheDore(MyContanarevoitures.v8,-140);
								doWait(2100);
								MyContanarevoitures.ExitTheParc(MyContanarevoitures.v8);
								break;
							}
							case "Voiture9":{
								MyContanarevoitures.ExitTheDore(MyContanarevoitures.v9,-210);
								doWait(2100);
								MyContanarevoitures.ExitTheParc(MyContanarevoitures.v9);
								break;
							}case "Voiture10":{
								MyContanarevoitures.ExitTheDore(MyContanarevoitures.v10,-280);
								doWait(2100);
								MyContanarevoitures.ExitTheParc(MyContanarevoitures.v10);
								break;
							}

							}


						} catch (Exception e) {
							// TODO Auto-generated catch block
							e.printStackTrace();
						}
					}


					private void DisagnGoToplaceAgent(final String placeEnvouy) {
						try {
							//Voiture
							NomV=getAgent().getLocalName().trim();
							switch (NomV) {
							case "Voiture1":{

								MyContanarevoitures.goToPlaceAgent(placeEnvouy, MyContanarevoitures.v1,0);
								break; }
							case "Voiture2":{

								MyContanarevoitures.goToPlaceAgent(placeEnvouy, MyContanarevoitures.v2,(1));
								break;
							}
							case "Voiture3":{
								MyContanarevoitures.goToPlaceAgent(placeEnvouy, MyContanarevoitures.v3,2);
								break;
							}
							case "Voiture4":{
								MyContanarevoitures.goToPlaceAgent(placeEnvouy, MyContanarevoitures.v4,3);
								break;
							}case "Voiture5":{
								MyContanarevoitures.goToPlaceAgent(placeEnvouy, MyContanarevoitures.v5,4);
								break;
							}
							case "Voiture6":{
								MyContanarevoitures.goToPlaceAgent(placeEnvouy, MyContanarevoitures.v6,5);
								break;
							}
							case "Voiture7":{
								MyContanarevoitures.goToPlaceAgent(placeEnvouy, MyContanarevoitures.v7,6);
								break;
							}
							case "Voiture8":{
								MyContanarevoitures.goToPlaceAgent(placeEnvouy, MyContanarevoitures.v8,7);
								break;
							}
							case "Voiture9":{
								MyContanarevoitures.goToPlaceAgent(placeEnvouy, MyContanarevoitures.v9,8);
								break;
							}case "Voiture10":{
								MyContanarevoitures.goToPlaceAgent(placeEnvouy, MyContanarevoitures.v10,9);
								break;
							}

							}

						} catch (Exception e) {
							// TODO Auto-generated catch block
							e.printStackTrace();
						}
					}
				});
			}
			private void DesignGoToDoor() {

				try {
					//Voiture
					NomV=getAgent().getLocalName();
					switch (NomV) {
					case "Voiture1":{
						MyContanarevoitures.goToDore(MyContanarevoitures.v1, 350);

						break; }
					case "Voiture2":{

						MyContanarevoitures.goToDore(MyContanarevoitures.v2, 280);
						break;
					}
					case "Voiture3":{
						MyContanarevoitures.goToDore(MyContanarevoitures.v3, 210);
						break;
					}
					case "Voiture4":{
						MyContanarevoitures.goToDore(MyContanarevoitures.v4, 140);
						break;
					}case "Voiture5":{
						MyContanarevoitures.goToDore(MyContanarevoitures.v5, 70);
						break;
					}
					case "Voiture6":{
						MyContanarevoitures.goToDore(MyContanarevoitures.v6, 0);
						break;
					}
					case "Voiture7":{
						MyContanarevoitures.goToDore(MyContanarevoitures.v7, -70);
						break;
					}
					case "Voiture8":{
						MyContanarevoitures.goToDore(MyContanarevoitures.v8, -140);
						break;
					}
					case "Voiture9":{
						MyContanarevoitures.goToDore(MyContanarevoitures.v9, -210);
						break;
					}case "Voiture10":{
						MyContanarevoitures.goToDore(MyContanarevoitures.v10, -280);
						break;
					}

					}

				} catch (Exception e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
			}
		});    
		}  
	}

	