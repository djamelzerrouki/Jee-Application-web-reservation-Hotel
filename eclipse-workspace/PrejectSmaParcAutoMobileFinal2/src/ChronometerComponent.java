
import javafx.animation.KeyFrame;
import javafx.animation.Timeline;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.geometry.Pos;
import javafx.scene.control.Label;
import javafx.scene.layout.HBox;
import javafx.util.Duration;

/**
 * @author antonio
 *
 */
public class ChronometerComponent extends HBox{
	private  Label nom;

	private Label labelMillis;
	private Label labelSeconds;
	private Label labelMinutes;		
	private long timeCounter;
	private Timeline timeline;
	private Label semicolon1;
	private Label semicolon2;
	public  String Name="";

	/**
	 * Chronometer with time 0
	 */
	public ChronometerComponent(){
		this(Duration.millis(0));
	}
	
	/**
	 * Chronometer with the given time
	 * @param duration
	 */
	public ChronometerComponent(Duration duration){		
		timeCounter = (long)duration.toMillis();
		setAlignment(Pos.CENTER);
		semicolon1 = new Label(":");
		semicolon2 = new Label(":");		
		labelMillis = new Label();
		labelSeconds = new Label();
		labelMinutes = new Label();
		nom = new Label();

	
		getChildren().addAll(nom,labelMinutes, semicolon1, labelSeconds, semicolon2, labelMillis);		
		timeline = new Timeline(new KeyFrame(Duration.millis(1), new EventHandler<ActionEvent>(){
			@Override
			public void handle(ActionEvent arg0) {
				updateLabels(timeCounter++);	
				nom.setText(Name);

			}}));
		timeline.setCycleCount(Timeline.INDEFINITE);
	}
	
	/**
	 * Get the time represented in this chronometer
	 * @return
	 */
	public long getTime(){
		return timeCounter;
	}
	
	/**
	 * Get the time of the chronometer in Duration
	 * @return
	 */
	public Duration getDuration(){
		return Duration.millis(timeCounter);
	}
	
	/**
	 * Set the time of this chronometer
	 * @param time
	 */
	public void setTime(long time){
		this.timeCounter = time;
		updateLabels(timeCounter);
	}
	
	/**
	 * set the duration 
	 * @param time
	 */
	public void setDuration(Duration time){
		this.timeCounter = (long)time.toMillis();
		updateLabels(timeCounter);
	}
	
	/**
	 * Play the chronometer
	 */
	public void play(){
		timeline.play();
	}
	
	/**
	 * Stop the chronometer 
	 */
	public void stop(){
		timeline.stop();
	}
	
	/**
	 * Reset the chronometer
	 */
	public void reset(){
		stop();
		timeCounter = 0L;
	}
	/**
	 * Update the labels with the timeCounter, time in the chronometer in milliseconds
	 * @param timeCounter
	 */
	protected void updateLabels(long timeCounter) {
		long milliseconds = timeCounter%1000;
		long seconds = (timeCounter/1000)%60;
		long minutes = (timeCounter/60000)%60;
		String sMil = milliseconds<10?("00"+milliseconds):milliseconds<100?("0"+milliseconds):(""+milliseconds);
		String sSec = seconds<10?("0"+seconds):(""+seconds);
		String sMin = minutes<10?("0"+minutes):(""+minutes);
	    
		labelMillis.setText(sMil);
		labelSeconds.setText(sSec);
		labelMinutes.setText(sMin);
		
	}
	

	public void setNameStyle(String style) {
nom.setStyle(style);

		
	}
	public void setChronoStyle(String style) {
	//	nom.setStyle(style);

		labelMillis.setStyle(style);
		labelMinutes.setStyle(style);
		labelSeconds.setStyle(style);
		semicolon1.setStyle(style);
		semicolon2.setStyle(style);
	}

}