package com.example.djamel.tp03intent;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.EditText;

public class  Activity2 extends Activity {


	private EditText  Text;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		
		setContentView(R.layout.activity2);

 	 Text = (EditText) findViewById(R.id.editText);

 		Button btn_ok = (Button) findViewById(R.id.btn_ok);
		btn_ok.setOnClickListener(new OnClickListener() {

			// Call enterClicked() when pressed

			@Override
			public void onClick(View v) {

                String input =  Text.getText().toString();

                 Intent intent = new Intent();
                intent.putExtra("?", input);

                 setResult(RESULT_OK, intent);
                 finish();
			}
		});

	}



}
