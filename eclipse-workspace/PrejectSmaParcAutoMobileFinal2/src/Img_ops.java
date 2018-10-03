import java.io.File;
import java.io.FileInputStream;

import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;

public class Img_ops extends Application{

	public static void main(String[] args) {
		launch(args);

	}

	@Override
	public void start(Stage stage) throws Exception {
		
		//Image image = new Image(new FileInputStream("‪C:\\Users\\djamel\\Desktop\\imag.jpg"));
		
		//ImageView imageView = new ImageView();
		

		StackPane root =new StackPane();
		root.setStyle("-fx-background-image: url('‪imag.jpg')");

		Scene scene = new Scene(root,900,500);
		
		 
		
		stage.setTitle("Image ops");
		
		stage.setScene(scene);
		
		stage.show();
	}

}