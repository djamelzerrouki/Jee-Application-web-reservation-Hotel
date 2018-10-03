package com.disagn;



import java.io.IOException;

import javafx.scene.paint.ImagePattern;

import javafx.animation.PathTransition;
import javafx.animation.TranslateTransition;
import javafx.application.Application;
import javafx.event.Event;
import javafx.event.EventHandler;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Group;
import javafx.scene.Scene;
import javafx.scene.canvas.Canvas;
import javafx.scene.control.Button;
import javafx.scene.effect.DropShadow;
import javafx.scene.image.Image;
import javafx.scene.layout.HBox;
import javafx.scene.layout.StackPane;
import javafx.scene.paint.Color;
import javafx.scene.shape.Rectangle;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import javafx.util.Duration;



public class disagn extends Application{
	private static Button v1,v2,v3,v4,v5,v6,v7,v8,v9,v10;
	public disagn() {
		// TODO Auto-generated constructor stub
	}


	@Override
	public void start(Stage primaryStage) {
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
			Button hh=new Button(" v1 ");
			hh.setPrefSize(50, 100);	
hh.setLayoutX(380);
hh.setLayoutY(330);

			 v1=new Button(" v1 ");
			 v2=new Button(" v2 ");
			 v3=new Button(" v3 ");
			 v4=new Button(" v4 ");
			 v5=new Button(" v5 ");
			 v6=new Button(" v6 ");
			 v7=new Button(" v7 ");
			 v8=new Button(" v8 ");
			 v9=new Button(" v9 ");
			 v10=new Button(" v10 ");
			v1.setPrefSize(50, 100);	
			v2.setPrefSize(50, 100);
			v3.setPrefSize(50, 100);	
			v4.setPrefSize(50, 100);
			v5.setPrefSize(50, 100);	
			v6.setPrefSize(50, 100);
			v7.setPrefSize(50, 100);	
			v8.setPrefSize(50, 100);
			v9.setPrefSize(50, 100);	
			v10.setPrefSize(50, 100);
			
			Image image = new Image("photocars/v1.jpg");

			Rectangle r=new Rectangle(10,10,50,100);
			
			//r.setFill(Color.GREEN);
		r.setArcHeight(30);
			r.setArcWidth(130);
        //  r.setStroke(Color.BLACK);
         // r.setStrokeWidth(5);
ImagePattern imagePattern = new ImagePattern(image);
r.setFill(imagePattern);
			
//star-button:hover { -fx-scale-x: 1.2; -fx-scale-y: 1.2; } 
			v1.setStyle("-fx-background-image: url('photocars/v1.jpg');");
			v2.setStyle("-fx-background-image: url('photocars/v2.jpg')");
			v3.setStyle("-fx-background-image: url('photocars/v3.jpg')");
			v4.setStyle("-fx-background-image: url('photocars/v4.jpg')");
			v5.setStyle("-fx-background-image: url('photocars/v5.jpg')");
			v6.setStyle("-fx-background-image: url('photocars/v6.jpg')");
			v7.setStyle("-fx-background-image: url('photocars/v7.jpg')");
			v8.setStyle("-fx-background-image: url('photocars/v8.jpg')");
			v9.setStyle("-fx-background-image: url('photocars/v9.jpg')");
			v10.setStyle("-fx-background-image: url('photocars/v10.jpg')");

		
			StackPane holder = new StackPane();
			v10.setOnAction(new EventHandler() {
				@Override
				public void handle(Event arg0) {


					try {

					

						TranslateTransition Ptransition1=new TranslateTransition(Duration.seconds(2),v1);
						TranslateTransition Ptransition2=new TranslateTransition(Duration.seconds(2),v2);
						TranslateTransition Ptransition3=new TranslateTransition(Duration.seconds(2),v3);
						TranslateTransition Ptransition4=new TranslateTransition(Duration.seconds(2),v4);
						TranslateTransition Ptransition5=new TranslateTransition(Duration.seconds(2),v5);
						TranslateTransition Ptransition6=new TranslateTransition(Duration.seconds(2),v6);
						TranslateTransition Ptransition7=new TranslateTransition(Duration.seconds(2),v7);
						TranslateTransition Ptransition8=new TranslateTransition(Duration.seconds(2),v8);
						TranslateTransition Ptransition9=new TranslateTransition(Duration.seconds(2),v9);
						TranslateTransition Ptransition10=new TranslateTransition(Duration.seconds(2),v10);

						goToPlace(Ptransition1,40,-510);
						goToPlace(Ptransition2,120,-510);
						goToPlace(Ptransition3,200,-510);
						goToPlace(Ptransition4,280,-510);
						goToPlace(Ptransition5,360,-510);
						
						
						goToPlace(Ptransition6,40,-510);
						goToPlace(Ptransition7,120,-510);
						goToPlace(Ptransition8,200,-510);
						goToPlace(Ptransition9,280,-510);
						goToPlace(Ptransition10,360,-510);

						
					} catch (Exception e) {
						// TODO Auto-generated catch block
						e.printStackTrace();
					}




				}
			});

			Canvas canvas = new Canvas(800,420);

			holder.getChildren().addAll(canvas,hBox);

			hBoxV.getChildren().addAll(v1,v2,v3,v4,v5,v6,v7,v8,v9,v10,r);
			root.getChildren().addAll(holder,hBoxV,hh);
			holder.setStyle("-fx-background-image: url('Myparking.jpg')");
			/*	try {
				TranslateTransition transition1=new TranslateTransition(Duration.seconds(4),v1);
				transition1.setToX(350);
				transition1.setToY(-300);
				transition1.play();	
				new Thread().sleep(2000);
				//###################################################################"
				TranslateTransition transition2=new TranslateTransition(Duration.seconds(4),v2);
				transition2.setToX(280);
				transition2.setToY(-300);
				//transition.setCycleCount(PathTransition.INDEFINITE);
				transition2.play();
				new Thread().sleep(2000); 
				//###################################################################"
				TranslateTransition transition3=new TranslateTransition(Duration.seconds(4),v3);
				transition3.setToX(210);
				transition3.setToY(-300);
				//transition.setCycleCount(PathTransition.INDEFINITE);
				transition3.play();
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}*/
			try {

			


				goToDore(v1,350,-300);
				goToDore(v2,280,-300);
				goToDore(v3,210,-300);
				goToDore(v4,140,-300);
				goToDore(v5,70,-300);
				goToDore(v6,0,-300);
				goToDore(v7,-70,-300);
				goToDore(v8,-140,-300);
				goToDore(v9,-210,-300);
				goToDore(v10,-280,-300);



			} catch (Exception e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			Scene scene = new Scene(root, 900, 900, Color.TRANSPARENT);
			primaryStage.setScene(scene);

			primaryStage.sizeToScene();
			primaryStage.show();
			root.setEffect(new DropShadow(15, Color.GRAY));
			primaryStage.setX(400);
			primaryStage.setY(50);

		} catch(Exception e) {
			e.printStackTrace();
		}
	}


	public static void goV1ToDore() throws InterruptedException {
		TranslateTransition transition1=new TranslateTransition(Duration.seconds(2),v1);
		transition1.setToX(350);
		transition1.setToY(-300);
		//transition.setCycleCount(PathTransition.INDEFINITE);
		transition1.play();
	}

	public static void goToDore(Button v,int x,int y) throws InterruptedException {
		TranslateTransition transition=new TranslateTransition(Duration.seconds(2),v);
		System.out.println(v.getLayoutX()+"  "+v.getLayoutY());

		transition.setToX(x);
		transition.setToY(y);
		//transition.setCycleCount(2);

	//	transition.setAutoReverse(true);
		
		//transition.setCycleCount(PathTransition.INDEFINITE);
		transition.play();
		transition.setOnFinished(event -> {
		    // The transition works by manipulating translation values,
		    // After the transition is complete, move the node to the new location
		    // and zero the translation after relocating the node.
		   
System.out.println(v.getLayoutX()+"  "+v.getLayoutY());
		

		});


		//new Thread().sleep(200);
	}

	public static void goToPlace(TranslateTransition transition,int x,int y) throws InterruptedException {
		transition.setToX(x);
		transition.setToY(y);
		//transition.setCycleCount(PathTransition.INDEFINITE);
		transition.play();
		//new Thread().sleep(200);
	}
	public static void main(String[] args) {
		launch(args);
	}
}
