

import java.util.ArrayList;

import jade.core.Profile;
import jade.core.ProfileImpl;
import jade.core.Runtime;
import jade.util.ExtendedProperties;
import jade.util.leap.Properties;
import jade.wrapper.AgentContainer;
import jade.wrapper.AgentController;
import javafx.animation.TranslateTransition;
import javafx.application.Application;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Group;
import javafx.scene.Scene;
import javafx.scene.canvas.Canvas;
import javafx.scene.effect.DropShadow;
import javafx.scene.image.Image;
import javafx.scene.layout.HBox;
import javafx.scene.layout.StackPane;
import javafx.scene.layout.VBox;
import javafx.scene.paint.Color;
import javafx.scene.paint.ImagePattern;
import javafx.scene.shape.Rectangle;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import javafx.util.Duration;

public class MyContanarevoitures extends Application {
	private static   int NmbrV = 10;
	private Voitures voitures;
static Integer ordre=1;
	 static Rectangle v1;
	 static Rectangle v2;
	 static Rectangle v3;
	 static Rectangle v4;
	 static Rectangle v5;
	 static Rectangle v6;
	 static Rectangle v7;
	 static Rectangle v8;
	 static Rectangle v9;
	 static Rectangle v10;
		public static ChronometerComponent chrono,chrono2,chrono3,chrono4,chrono5,chrono6,chrono7,chrono8,chrono9,chrono10;

	public Voitures getMyContanarevoitures() {
		return voitures;
	}

	public void setMyContanarevoitures(Voitures voitures) {
		this.voitures = voitures;
	}

	public ArrayList<String> list;

	@Override
	public void start(Stage primaryStage) {
		startMyContanarevoitures();

		try {
			primaryStage.initStyle(StageStyle.TRANSPARENT);

			Group root = new Group();
			HBox hBox=new HBox(20);
			hBox.setPadding(new Insets(30));
			hBox.setAlignment(Pos.CENTER);
			HBox hBoxV=new HBox(20);
			hBoxV.setPadding(new Insets(30));
			hBoxV.setAlignment(Pos.CENTER);
			hBoxV.setLayoutY(600);
			//hBox.setPrefSize(700, 200 );
			//	hBox.getChildren().addAll(p1,p2,p3,p4,p5);


			Image image1 = new Image("photocars/v1.jpg");
			Image image2 = new Image("photocars/v2.jpg");
			Image image3 = new Image("photocars/v3.jpg");
			Image image4 = new Image("photocars/v4.jpg");
			Image image5 = new Image("photocars/v5.jpg");
			Image image6 = new Image("photocars/v6.jpg");
			Image image7 = new Image("photocars/v7.jpg");
			Image image8 = new Image("photocars/v8.jpg");
			Image image9 = new Image("photocars/v9.jpg");
			Image image10 = new Image("photocars/v10.jpg");

			 v1=new Rectangle(10,10,50,100);
			 v2=new Rectangle(10,10,50,100);
			 v3=new Rectangle(10,10,50,100);
			 v4=new Rectangle(10,10,50,100);
			 v5=new Rectangle(10,10,50,100);
			 v6=new Rectangle(10,10,50,100);
			 v7=new Rectangle(10,10,50,100);
			 v8=new Rectangle(10,10,50,100);
			 v9=new Rectangle(10,10,50,100);
			 v10=new Rectangle(10,10,50,100);
			 
			ImagePattern imagePattern1 = new ImagePattern(image1);
			ImagePattern imagePattern2 = new ImagePattern(image2);
			ImagePattern imagePattern3 = new ImagePattern(image3);
			ImagePattern imagePattern4 = new ImagePattern(image4);
			ImagePattern imagePattern5 = new ImagePattern(image5);
			ImagePattern imagePattern6 = new ImagePattern(image6);
			ImagePattern imagePattern7 = new ImagePattern(image7);
			ImagePattern imagePattern8 = new ImagePattern(image8);
			ImagePattern imagePattern9 = new ImagePattern(image9);
			ImagePattern imagePattern10 = new ImagePattern(image10);

			v1.setFill(imagePattern1);
			v2.setFill(imagePattern2);
			v3.setFill(imagePattern3);
			v4.setFill(imagePattern4);
			v5.setFill(imagePattern5);
			v6.setFill(imagePattern6);
			v7.setFill(imagePattern7);
			v8.setFill(imagePattern8);
			v9.setFill(imagePattern9);
			v10.setFill(imagePattern10);
			
			
		
v1.setArcHeight(30);
			 v1.setArcWidth(130);
			 v2.setArcHeight(30);
			 v2.setArcWidth(130);
			 v3.setArcHeight(30);
			 v3.setArcWidth(130);
			 v4.setArcHeight(30);
			 v4.setArcWidth(130);
			 v5.setArcHeight(30);
			 v5.setArcWidth(130);
			 v6.setArcHeight(30);
			 v6.setArcWidth(130);
			 v7.setArcHeight(30);
			 v7.setArcWidth(130);
			 v8.setArcHeight(30);
			 v8.setArcWidth(130);
			 v9.setArcHeight(30);
			 v9.setArcWidth(130);
			 v10.setArcHeight(30);
			 v10.setArcWidth(130);
	
		
			
	/*	
	     	v2.setStyle("-fx-background-image: url('photocars/v2.jpg')");
			v3.setStyle("-fx-background-image: url('photocars/v3.jpg')");
			v4.setStyle("-fx-background-image: url('photocars/v4.jpg')");
			v5.setStyle("-fx-background-image: url('photocars/v5.jpg')");
			v6.setStyle("-fx-background-image: url('photocars/v6.jpg')");
			v7.setStyle("-fx-background-image: url('photocars/v7.jpg')");
			v8.setStyle("-fx-background-image: url('photocars/v8.jpg')");
			v9.setStyle("-fx-background-image: url('photocars/v9.jpg')");
			v10.setStyle("-fx-background-image: url('photocars/v10.jpg')");

*/
			StackPane holder = new StackPane();
		

			Canvas canvas = new Canvas(800,420);

			holder.getChildren().addAll(canvas,hBox);
			hBoxV.getChildren().addAll(v1,v2,v3,v4,v5,v6,v7,v8,v9,v10);

		
			
			root.getChildren().addAll(holder,MyVoutur(),MyChrono());
			holder.setStyle("-fx-background-image: url('Myparking.jpg')");
			
			

			Scene scene = new Scene(root,1500, 800, Color.TRANSPARENT);
			primaryStage.setScene(scene);

			primaryStage.sizeToScene();
			primaryStage.show();
			root.setEffect(new DropShadow(15, Color.GRAY));
			primaryStage.setX(10);
			primaryStage.setY(50);

		} catch(Exception e) {
			e.printStackTrace();
		}


	}
	static void startMyContanarevoitures(){
		try {
			jade.core.Runtime runtime= Runtime.instance();
			Properties properties=new ExtendedProperties();
			properties.setProperty(Profile.GUI, "true");
			Profile Mainprofile=new ProfileImpl((jade.util.leap.Properties) properties);
			AgentContainer mainContainer =runtime.createMainContainer(Mainprofile); 
			mainContainer.start();

			Profile profile=new ProfileImpl(false);
			profile.setParameter(Profile.MAIN_HOST, "localhost");
			AgentContainer agentContainer =runtime.createAgentContainer(profile);


			int cont=1;
			while (cont<=5) {

				AgentController agentController1 = agentContainer.createNewAgent("Place"+cont, "Place", new Object[]{});
				agentController1.start();
				System.out.println(agentController1.getName());
				cont++;
			}

			AgentController agentController0 = agentContainer.createNewAgent("Portail", "Portail", new Object[]{});

			agentController0.start();	




			int index=1;
			while (index<=NmbrV) {
				AgentController agentController = agentContainer.createNewAgent("Voiture"+index, "Voitures", new Object[]{});

				System.out.println(agentController.getName());

				agentController.start();	

				index++;
				long randomNum =  0 + (long)(Math.random() * 2000);

				
				new Thread().sleep(randomNum);
			}




		} catch (Exception e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
		public static void goToDore(Rectangle v,int x) throws InterruptedException {
		TranslateTransition transition1=new TranslateTransition(Duration.seconds(2),v);
		transition1.setToX(x);
		transition1.setToY(-300);
		transition1.setCycleCount(2);
        transition1.setAutoReverse(true);
		transition1.play();
	}


	public static void goToPlace(TranslateTransition transition,int x,int y) throws InterruptedException {
		transition.setToX(x);
		transition.setToY(y);
		//transition.setCycleCount(PathTransition.INDEFINITE);
		transition.play();
	}
	public static void goToPlaceAgent(String place,Rectangle v,int X) throws InterruptedException {
		TranslateTransition transition=new TranslateTransition(Duration.millis(3000),v);
		int x =40+(-70*X);

switch (place) {
case "Place1":{
	transition.setToX(x);
	transition.setToY(-510);
    transition.play();
	break;
}
case "Place2":{
	transition.setToX(x+150);
	transition.setToY(-510);

	transition.play();
	break;
}case "Place3":{
	transition.setToX(x+300);
	transition.setToY(-510);
	
	transition.play();
	break;
}case "Place4":{
	transition.setToX(x+450);
	transition.setToY(-510);

	transition.play();
	break;
}case "Place5":{
	transition.setToX(x+600);
	transition.setToY(-510);

	transition.play();
	break;
}	
	
}
		
	
	}
	
	public static void ExitTheDore(Rectangle v,int x) throws InterruptedException {
		TranslateTransition transition=new TranslateTransition(Duration.seconds(2),v);
        transition.setToX(x);
		transition.setToY(-300);
		transition.play();
	}
	public static void ExitTheParc(Rectangle v) throws InterruptedException {
		TranslateTransition transition=new TranslateTransition(Duration.seconds(2),v);
        transition.setToX(0);
		transition.setToY(0);
		transition.play();
	}
	@SuppressWarnings("unused")
	private VBox MyChrono() {
//
		String style2 = "-fx-font: 14pt \"Arial\";-fx-background:  Black;  -fx-border-color: red;\r\n" + 
				"	    -fx-border-insets: 5;\r\n" + 
				"	    -fx-border-width: 3;\r\n" + 
				"	    -fx-border-style: dashed;";
		
        String style = "-fx-font: 14pt \"Arial\";-fx-text-fill:  #ffccc;"
        		+ "\r\n" + 
        		"   -fx-font-size: 17px;\r\n" + 
        		"   -fx-font-family: \"Arial Black\";\r\n" + 
        		"   -fx-fill: #818181;\r\n" + 
        		"   -fx-effect: innershadow( three-pass-box , rgba(0,0,0,0.2) , 6, 0.0 , 0 , 2 );\r\n" + 
        		"";
        //'Orbitron', sans-serif;
        String style1 = "-fx-font-size: 17px; -fx-font-family: \"Orbitron\";-fx-text-fill:  orange;";
		
		VBox vbox = new VBox(20);
		
		vbox.setAlignment(Pos.CENTER);
		vbox.setPadding(new Insets(10, 10, 10, 10));

		vbox.setLayoutX(810);
		vbox.setLayoutY(250);

		vbox.setStyle(style2);
		chrono = new ChronometerComponent();
		chrono2 = new ChronometerComponent();
		chrono3 = new ChronometerComponent();
		chrono4 = new ChronometerComponent();
		chrono4 = new ChronometerComponent();
		chrono5 = new ChronometerComponent();
		chrono6 = new ChronometerComponent();
		chrono7 = new ChronometerComponent();
		chrono8 = new ChronometerComponent();
		chrono9 = new ChronometerComponent();
		chrono10 = new ChronometerComponent();
		
		
		chrono.setChronoStyle(style1);
		chrono2.setChronoStyle(style1);		
		chrono3.setChronoStyle(style1);		
		chrono4.setChronoStyle(style1);		
		chrono5.setChronoStyle(style1);		
		chrono6.setChronoStyle(style1);		
		chrono7.setChronoStyle(style1);		
		chrono8.setChronoStyle(style1);		
		chrono9.setChronoStyle(style1);		
		chrono10.setChronoStyle(style1);	
		
		chrono.setNameStyle(style);
		chrono2.setNameStyle(style);		
		chrono3.setNameStyle(style);		
		chrono4.setNameStyle(style);		
		chrono5.setNameStyle(style);		
		chrono6.setNameStyle(style);		
		chrono7.setNameStyle(style);		
		chrono8.setNameStyle(style);		
		chrono9.setNameStyle(style);		
		chrono10.setNameStyle(style);	

	
	
		
		vbox.getChildren().addAll(chrono,chrono2,chrono3,chrono4,chrono5,chrono6,chrono7,chrono8,chrono9,chrono10);
		

	
		return vbox;

	}
	private HBox MyVoutur() { 
		HBox hBoxV=new HBox(20);
		hBoxV.setPadding(new Insets(30));
		hBoxV.setAlignment(Pos.CENTER);
		hBoxV.setLayoutY(600);
		//hBox.setPrefSize(700, 200 );
		//	hBox.getChildren().addAll(p1,p2,p3,p4,p5);


		Image image1 = new Image("photocars/v1.jpg");
		Image image2 = new Image("photocars/v2.jpg");
		Image image3 = new Image("photocars/v3.jpg");
		Image image4 = new Image("photocars/v4.jpg");
		Image image5 = new Image("photocars/v5.jpg");
		Image image6 = new Image("photocars/v6.jpg");
		Image image7 = new Image("photocars/v7.jpg");
		Image image8 = new Image("photocars/v8.jpg");
		Image image9 = new Image("photocars/v9.jpg");
		Image image10 = new Image("photocars/v10.jpg");

		 v1=new Rectangle(10,10,50,100);
		 v2=new Rectangle(10,10,50,100);
		 v3=new Rectangle(10,10,50,100);
		 v4=new Rectangle(10,10,50,100);
		 v5=new Rectangle(10,10,50,100);
		 v6=new Rectangle(10,10,50,100);
		 v7=new Rectangle(10,10,50,100);
		 v8=new Rectangle(10,10,50,100);
		 v9=new Rectangle(10,10,50,100);
		 v10=new Rectangle(10,10,50,100);
		 
		ImagePattern imagePattern1 = new ImagePattern(image1);
		ImagePattern imagePattern2 = new ImagePattern(image2);
		ImagePattern imagePattern3 = new ImagePattern(image3);
		ImagePattern imagePattern4 = new ImagePattern(image4);
		ImagePattern imagePattern5 = new ImagePattern(image5);
		ImagePattern imagePattern6 = new ImagePattern(image6);
		ImagePattern imagePattern7 = new ImagePattern(image7);
		ImagePattern imagePattern8 = new ImagePattern(image8);
		ImagePattern imagePattern9 = new ImagePattern(image9);
		ImagePattern imagePattern10 = new ImagePattern(image10);

		v1.setFill(imagePattern1);
		v2.setFill(imagePattern2);
		v3.setFill(imagePattern3);
		v4.setFill(imagePattern4);
		v5.setFill(imagePattern5);
		v6.setFill(imagePattern6);
		v7.setFill(imagePattern7);
		v8.setFill(imagePattern8);
		v9.setFill(imagePattern9);
		v10.setFill(imagePattern10);
	
v1.setArcHeight(30);
		 v1.setArcWidth(130);
		 v2.setArcHeight(30);
		 v2.setArcWidth(130);
		 v3.setArcHeight(30);
		 v3.setArcWidth(130);
		 v4.setArcHeight(30);
		 v4.setArcWidth(130);
		 v5.setArcHeight(30);
		 v5.setArcWidth(130);
		 v6.setArcHeight(30);
		 v6.setArcWidth(130);
		 v7.setArcHeight(30);
		 v7.setArcWidth(130);
		 v8.setArcHeight(30);
		 v8.setArcWidth(130);
		 v9.setArcHeight(30);
		 v9.setArcWidth(130);
		 v10.setArcHeight(30);
		 v10.setArcWidth(130);

  switch (NmbrV) {
case 1:
	hBoxV.getChildren().addAll(v1);
	break;
case 2:
	hBoxV.getChildren().addAll(v1,v2);
	break;
case 3:
	hBoxV.getChildren().addAll(v1,v2,v3);
	break;
case 4:
	hBoxV.getChildren().addAll(v1,v2,v3,v4);
	break;
case 5:
	hBoxV.getChildren().addAll(v1,v2,v3,v4,v5);
	break;
case 6:
	hBoxV.getChildren().addAll(v1,v2,v3,v4,v5,v6);
	break;
case 7:
	hBoxV.getChildren().addAll(v1,v2,v3,v4,v5,v6,v7 );
	break;
case 8:
	hBoxV.getChildren().addAll(v1,v2,v3,v4,v5,v6,v7,v8);
	break;
case 9:
	hBoxV.getChildren().addAll(v1,v2,v3,v4,v5,v6,v7,v8,v9);
	break;
	case 10:
		hBoxV.getChildren().addAll(v1,v2,v3,v4,v5,v6,v7,v8,v9,v10);
		break;
default:
	break;
}
 
				

			
				return hBoxV;

			}
	public static void main(String[] args) throws Exception {

		launch(args);
	
		startMyContanarevoitures();
		


	}
}
