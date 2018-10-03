package com.disagn;



import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;

import javafx.application.Application;
import javafx.scene.Group;
import javafx.scene.Scene;
import javafx.scene.effect.DropShadow;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.scene.paint.Color;
import javafx.scene.text.Font;
import javafx.scene.text.FontWeight;
import javafx.scene.text.Text;
import javafx.stage.Stage;



public class DisplayPlate extends Application{
	static Text datetext,datetext2,datetext3,datetext4,datetext5,datetext6,datetext7,datetext8,datetext9,datetext10;
	static Text nomV,nomV2,nomV3,nomV4,nomV5,nomV6,nomV7,nomV8,nomV9,nomV10;

	   HBox hB1,hB2,hB3,hB4,hB5,hB6,hB7,hB8,hB9,hB10;
	public DisplayPlate() {
		// TODO Auto-generated constructor stub
	}


	@Override
	public void start(Stage primaryStage) {
		try {
			//primaryStage.initStyle(StageStyle.TRANSPARENT);

			Group root = new Group();
			VBox vBox=new VBox();
			hB1 =new HBox(20);
		    hB2 =new HBox(20);
		    hB3 =new HBox(20);
		    hB4 =new HBox(20);
		    hB5 =new HBox(20);
		    hB6 =new HBox(20);
		    hB7 =new HBox(20);
		    hB8 =new HBox(20);
		    hB9 =new HBox(20);
		    hB10 =new HBox(20);
		    
			String cssnomV="-fx-fill:  linear-gradient(Blue , Black);\r\n";

		    datetext = new Text("");
			datetext.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			datetext.setStyle(cssnomV);
			datesystem(datetext);
			
			datetext2 = new Text("");
			datetext2.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			datetext2.setStyle(cssnomV);
			datesystem(datetext2);
			
			datetext3 = new Text("");
			datetext3.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			datetext3.setStyle(cssnomV);
			datesystem(datetext3);
			
			datetext4 = new Text("");
			datetext4.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			datetext4.setStyle(cssnomV);
			datesystem(datetext4);
			
			datetext5 = new Text("");
			datetext5.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			datetext5.setStyle(cssnomV);
			datesystem(datetext5);
			
			datetext6 = new Text("");
			datetext6.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			datetext6.setStyle(cssnomV);
			datesystem(datetext6);
			
			datetext7 = new Text("");
			datetext7.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			datetext7.setStyle(cssnomV);
			datesystem(datetext7);
			
			datetext8 = new Text("");
			datetext8.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			datetext8.setStyle(cssnomV);
			datesystem(datetext8);
			
			datetext9 = new Text("");
			datetext9.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			datetext9.setStyle(cssnomV);
			datesystem(datetext9);
			
			datetext10 = new Text("");
			datetext10.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			datetext10.setStyle(cssnomV);
			datesystem(datetext10);
			
			nomV = new Text("V1");
			nomV.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			nomV.setStyle(cssnomV);
			
			nomV2 = new Text("V1");
			nomV2.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			nomV2.setStyle(cssnomV);
			

			nomV3 = new Text("V1");
			nomV3.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			nomV3.setStyle(cssnomV);
			

			nomV4 = new Text("V1");
			nomV4.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			nomV4.setStyle(cssnomV);
			

			nomV5 = new Text("V1");
			nomV5.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			nomV5.setStyle(cssnomV);
			

			nomV6 = new Text("V1");
			nomV6.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			nomV6.setStyle(cssnomV);
			

			nomV7 = new Text("V1");
			nomV7.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			nomV7.setStyle(cssnomV);
			

			nomV8 = new Text("V1");
			nomV8.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			nomV8.setStyle(cssnomV);
			

			nomV9 = new Text("V1");
			nomV9.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			nomV9.setStyle(cssnomV);
			

			nomV10 = new Text("V1");
			nomV10.setFont(Font.font("Courier New", FontWeight.BOLD, 23));
			nomV10.setStyle(cssnomV);
			


			hB1.getChildren().addAll(nomV,datetext);
			hB2.getChildren().addAll(nomV2,datetext2);
			hB3.getChildren().addAll(nomV3,datetext3);
			hB4.getChildren().addAll(nomV4,datetext4);
			hB5.getChildren().addAll(nomV5,datetext5);
			hB6.getChildren().addAll(nomV6,datetext6);
			hB7.getChildren().addAll(nomV7,datetext7);
			hB8.getChildren().addAll(nomV8,datetext8);
			hB9.getChildren().addAll(nomV9,datetext9);
			hB10.getChildren().addAll(nomV10,datetext10);

			vBox.getChildren().addAll(hB1,hB2,hB3,hB4,hB5,hB6,hB7,hB8,hB9,hB10);

			root.getChildren().addAll(vBox);
			root.setStyle("-fx-background-color: linear-gradient(#b3b3ff, #4d4dff)");
			Scene scene = new Scene(root, 400, 400, Color.TRANSPARENT);
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
	private static  void datesystem( Text datetext) {
		Thread clock = new Thread() {
			public void run() {
				
				for (int i=0 ;i<60;i++) {
					if (i<10) {
						datetext.setText("0"+i+"");

					} else {
						datetext.setText(i+"");

					}

					try {
						sleep(1000);
					} catch (Exception ex) {
						//...
					}
				}
			}
		};
		clock.start();		
	}
	
	public static void main(String[] args) {
		launch(args);
	}
}
