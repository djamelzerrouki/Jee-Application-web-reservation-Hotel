package SearchOfWord;

import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;

import javafx.application.Application;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.Event;
import javafx.event.EventHandler;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.chart.LineChart;
import javafx.scene.chart.NumberAxis;
import javafx.scene.chart.XYChart;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.RadioButton;
import javafx.scene.control.TextField;
import javafx.scene.control.ToggleGroup;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.scene.paint.Color;
import javafx.scene.text.Font;
import javafx.scene.text.FontWeight;
import javafx.stage.Stage;


public class Main extends Application {


	public ArrayList<String> list;
	public TextField field;
	public static Label label2;
	public static HashMap<Integer, Long> hashMap ;
	public Button button1;
	public Button button2;

	public RadioButton choix0;
	public RadioButton choix1;
	public RadioButton choix2;
	public  ToggleGroup buttonGroup;

	public ListView<String> listView;
	public ObservableList<String> observableList;
	private XYChart.Series series;


	public static void creitFile() throws FileNotFoundException, IOException {
		int i=1;
		int j=0;
		StringBuffer str=new StringBuffer();
		while (i<=5) {
			FileOutputStream out = new FileOutputStream("file"+i+".txt");
			while (j<=100*i) {
				str.append("file ");
				j++;
			}
			str.append("ahmed");
			byte b[] = str.toString().getBytes();

			System.out.println("ahmed"+i);out.write(b);
			out.close();
			System.out.println("Donn file"+i);
			i++;

		}
	}

	@Override
	public void start(Stage primaryStage)throws Exception {
		creitFile();
		hashMap=new HashMap<Integer, Long>(); 

		//	Parent root= FXMLLoader.load(getClass().getResource("file.fxml"));
		BorderPane borderPaint=new BorderPane();

		buttonGroup=new ToggleGroup();

		choix0=new RadioButton("Exact");
		choix1=new RadioButton("Aproxcémiter");
		choix2=new RadioButton("Dictionaire");
		choix0.setSelected(true);
		choix0.setToggleGroup(buttonGroup);
		choix1.setToggleGroup(buttonGroup);
		choix2.setToggleGroup(buttonGroup);


		label2=new Label("");

		label2.setPrefHeight(37);
		label2.setAlignment(Pos.CENTER);
		label2.setPrefHeight(40);
		label2.setFont(Font.font("Tahoma", FontWeight.BOLD, 11));
		label2.setTextFill(Color.RED);

		field=new TextField();
		field.setPrefHeight(37);
		field.setPrefWidth(200);
		field.setPromptText("Entrer le mot de recherche...");
		field.setOnKeyPressed(new EventHandler<>() {

			@Override
			public void handle(KeyEvent arg0){}
		});
		button2=new Button("Afficher graphe");
		button2.setPrefHeight(37);
		button2.setOnAction(new EventHandler() {

			@Override
			public void handle(Event arg0) {
				// TODO Auto-generated method stub
				if (button2.getText().equals("Afficher graphe")&&(choix1.isSelected())) {


					try {
						
						Linchart(borderPaint);
						button2.setText("Masqui  graphe ");
					} catch (Exception e) {
						// TODO Auto-generated catch block
						e.printStackTrace();
					}
				}else {
try {
						
	borderPaint.setLeft(null);
	button2.setText("Afficher graphe");
					} catch (Exception e) {
						// TODO Auto-generated catch block
						e.printStackTrace();
					}
				}

			}
		});


		button1=new Button("Recherche");
		button1.setPrefHeight(37);
		button1.setOnAction(new EventHandler<ActionEvent>() {

			@Override
			public void handle(ActionEvent event) {


				if (choix2.isSelected()) {

					String s=field.getText().toString().trim();

					observableList.clear();
					new abcd();

					try {	
						list=SearchOfWord.abcd.Search2(s);
						if (list!=null) {


							for (String val : list) {
								observableList.add(val);

							}}
					} catch (Exception e) {
						e.printStackTrace();
					}

				} 
				
				{if (choix1.isSelected()) {

					try {
						theTimeofDistenc() ;
					} catch (FileNotFoundException e) {
						// TODO Auto-generated catch block
						e.printStackTrace();
					}
				}
				}
				if (choix0.isSelected()) {

					observableList.clear();
					String s=field.getText().toString().trim();

					try {	
						//list=SearchOfWord.abcd.Search(s);
						list=abcd.Search(s);
						if (list!=null) {
							for (String val : list) {
								observableList.add(val);
							}}
					} catch (Exception e) {
						e.printStackTrace();
					}
				}
 }




		});
		HBox hbox1=new HBox(20);
		hbox1.setPadding(new Insets(20));
		hbox1.setAlignment(Pos.CENTER);

		hbox1.getChildren().addAll(choix0,choix1,choix2,button1);
		//hbox1.getChildren().addAll(button1,button3,button4);
		HBox hbox=new HBox(20);
		hbox.setPadding(new Insets(20));
		hbox.setAlignment(Pos.CENTER);

		hbox.getChildren().addAll(field);
		list=new ArrayList<String>();
		observableList=FXCollections.observableArrayList();
		listView =new ListView<String>(observableList);
		VBox vbox=new VBox(20);
		vbox.setPadding(new Insets(20));
		vbox.getChildren().addAll(listView,button2);
		VBox vbox2=new VBox();
		vbox2.setAlignment(Pos.CENTER);
		//	vbox2.setPadding(new Insets(20));
		vbox2.getChildren().addAll(hbox,label2);
		borderPaint.setTop(vbox2);
		borderPaint.setCenter(vbox);
		borderPaint.setBottom(hbox1);

		Scene scene = new Scene(borderPaint,750,550);

		primaryStage.setScene(scene);
		primaryStage.show();
	}
	public int theTimeofDistenc() throws FileNotFoundException {
		int time=0;
		if (field.getText().trim().length()>=2) {
			observableList.clear();
			String s=field.getText().toString().trim();
			new abcd();

			try {	
				list=abcd.Search3(s);
				System.out.println("Total execution time: " + time  );		
				if (list!=null) {
					for (String val : list) {
						observableList.add(val);

					}}
			} catch (Exception e) {
				e.printStackTrace();
			}

		} 
		return time;
	}

	// methode de creation de Linchart
	public  void Linchart(BorderPane borderPaint) throws FileNotFoundException, InterruptedException {

		final NumberAxis xAxis = new NumberAxis();
		final NumberAxis yAxis = new NumberAxis();
		xAxis.setLabel("Number of Word");
		//creating the chart
		final LineChart<Number,Number> lineChart = new LineChart<Number,Number>(xAxis,yAxis);

		lineChart.setTitle("COMPLEXITY of algorithm, Distance");
		//defining a series

		XYChart.Series series = new XYChart.Series();
		series.setName("N°OfWord By time");

		String s=field.getText().toString().trim();
		ArrayList< String> arrayList=abcd.Search01(s);

		int k=1;
		XYChart.Series series2 = new XYChart.Series();
		series2.setName("N°OfWord By time");
		for (String val : arrayList) {
			System.out.println(val);

			series.getData().add(new XYChart.Data(Integer.parseInt(val.toString().substring(0,val.toString().indexOf("/"))),Integer.parseInt(val.toString().substring(val.toString().indexOf("/")+1))));

			series2.getData().add(new XYChart.Data(Math.exp(k),Integer.parseInt(val.toString().substring(val.toString().indexOf("/")+1)) ));

			k++;
		}
		
		borderPaint.setLeft(lineChart);
		lineChart.getData().add(series);
	}
	
	public static void main(String[] args) {

		launch(args);

	}	


}
