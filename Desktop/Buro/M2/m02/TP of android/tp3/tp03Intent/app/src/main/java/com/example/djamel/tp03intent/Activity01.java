package com.example.djamel.tp03intent;

import android.app.Activity;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.TextView;

public class Activity01 extends Activity {


	private TextView text;
	static private final String path = "http://www.google.com";

	@Override
	protected void onActivityResult(int requestCode, int resultCode, Intent data) {

		if (requestCode == 0) {
			if (resultCode == RESULT_OK) {
				String value = data.getStringExtra("?");
				if (value != null)
					text.setText(value);
			}
		}

	}

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity01);

 		text = (TextView) findViewById(R.id.textView1);

 		Button btn1 = (Button) findViewById(R.id.btn1);
		btn1.setOnClickListener(new OnClickListener() {

 			@Override
			public void onClick(View v) {
              	Intent intent = new Intent(Activity01.this,  Activity2.class);
                 startActivityForResult(intent, 0);
			}
		});


 		Button btn2 = (Button) findViewById(R.id.btn2);
		btn2.setOnClickListener(new OnClickListener() {

 			@Override
			public void onClick(View v) {
             	Uri uri = Uri.parse(path);
				Intent baseIntent = new Intent(Intent.ACTION_VIEW, uri);
				Intent  myintent = Intent.createChooser(baseIntent, path);
              	startActivity(myintent);

			}
		});

	}



}
