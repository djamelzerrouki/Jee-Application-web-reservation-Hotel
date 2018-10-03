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
public class ChronoTest extends Application{
	public static void main(String[] args){
		launch(args);
	}
	private Label labelMillis;
	private Label labelSeconds;
	private Label labelMinutes;		
	private int timeCounter = 0;
	private Timeline timeline;
	private ChronometerComponent chrono;

	@Override
	public void start(final Stage stage) throws Exception {
		VBox vbox = new VBox(10.0);
		vbox.setAlignment(Pos.CENTER);
		String style = "-fx-font: 50pt \"Arial\";-fx-text-fill:  orange;";
	
		labelMillis = new Label("000");
		labelMillis.setStyle(style);
		labelSeconds = new Label("00");		
		labelSeconds.setStyle(style);
		labelMinutes = new Label("00");
		labelMinutes.setStyle(style);
		Label semicolon1 = new Label(":"), semicolon2 = new Label(":");
		semicolon1.setStyle(style);
		semicolon2.setStyle(style);
		
		HBox hbox = new HBox(5);
		hbox.setAlignment(Pos.CENTER);		
		hbox.getChildren().addAll(labelMinutes, semicolon1, labelSeconds, semicolon2, labelMillis);
		
		timeline = new Timeline(new KeyFrame(Duration.millis(1), new EventHandler<ActionEvent>(){
			@Override
			public void handle(ActionEvent arg0) {
				updateLabels(timeCounter++);				
			}}));
		timeline.setCycleCount(Timeline.INDEFINITE);
		
		chrono = new ChronometerComponent();
		chrono.setChronoStyle(style);		
		
		Button start = new Button("Start");
		start.setOnAction(new EventHandler<ActionEvent>() {			
			@Override
			public void handle(ActionEvent arg0) {
				timeline.playFromStart();
				stage.setFullScreen(true);
				chrono.play();
			}
		});
		
		Button stop = new Button("Stop");
		stop.setOnAction(new EventHandler<ActionEvent>() {			
			@Override
			public void handle(ActionEvent arg0) {
				timeline.stop();
				chrono.stop();
				stage.setFullScreen(false);
			}
		});
		
		vbox.setOnKeyPressed(new EventHandler<Event>() {
			@Override
			public void handle(Event event) {
				timeline.stop();				
			}
		});
		
		vbox.getChildren().addAll(hbox, start, stop, chrono);
		Scene scene = new Scene(vbox, 300, 300);
		stage.setScene(scene);
		stage.show();
	}

	protected void updateLabels(int timeCounter) {
		int milliseconds = timeCounter%1000;
		int seconds = (timeCounter/1000)%60;
		int minutes = (timeCounter/60000)%60;
		String sMil = milliseconds<10?("00"+milliseconds):milliseconds<100?("0"+milliseconds):(""+milliseconds);
		String sSec = seconds<10?("0"+seconds):(""+seconds);
		String sMin = minutes<10?("0"+minutes):(""+minutes);
		labelMillis.setText(sMil);
		labelSeconds.setText(sSec);
		labelMinutes.setText(sMin);
	}
}