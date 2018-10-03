package com.disagn;

import javafx.animation.KeyFrame;
import javafx.animation.Timeline;
import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.Event;
import javafx.event.EventHandler;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import javafx.util.Duration;

/**
 * @author MXGTEAM4
 *
 */
public class MyChronoTest extends Application{
	public static void main(String[] args){
		launch(args);
	}

	public static ChronometerComponent chrono,chrono2,chrono3,chrono4,chrono5,chrono6,chrono7,chrono8,chrono9,chrono10;

	@Override
	public void start(Stage stage) throws Exception {
		String style2 = "-fx-font: 14pt \"Arial\";-fx-background:  Black;";
        String style = "-fx-font: 14pt \"Arial\";-fx-text-fill:  Red;";
		
		VBox vbox = new VBox(10.0);
		vbox.setAlignment(Pos.CENTER);
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
		
		
		chrono.setChronoStyle(style);		
		chrono2.setChronoStyle(style);		
		chrono3.setChronoStyle(style);		
		chrono4.setChronoStyle(style);		
		chrono5.setChronoStyle(style);		
		chrono6.setChronoStyle(style);		
		chrono7.setChronoStyle(style);		
		chrono8.setChronoStyle(style);		
		chrono9.setChronoStyle(style);		
		chrono10.setChronoStyle(style);		

		Button start = new Button("Start");
		start.setOnAction(new EventHandler<ActionEvent>() {			
			@Override
			public void handle(ActionEvent arg0) {
			//	stage.setFullScreen(true);
				chrono.play();
				chrono2.play();
				chrono3.play();
				chrono4.play();

			}
		});
		
		Button stop = new Button("Stop");
		stop.setOnAction(new EventHandler<ActionEvent>() {			
			@Override
			public void handle(ActionEvent arg0) {
				chrono.stop();
				chrono2.stop();
				chrono3.stop();
				chrono4.stop();

				stage.setFullScreen(false);
			}
		});
		
	
		
		vbox.getChildren().addAll(start, stop, chrono,chrono2,chrono3,chrono4,chrono5,chrono6,chrono7,chrono8,chrono9,chrono10);
		

		Scene scene = new Scene(vbox, 300, 300);
		stage.setScene(scene);
		stage.show();
	}
	private ChronometerComponent createnewComponent(ChronometerComponent chrono ) {
		// TODO Auto-generated method stub
chrono=new ChronometerComponent();
return chrono; 
	}

}