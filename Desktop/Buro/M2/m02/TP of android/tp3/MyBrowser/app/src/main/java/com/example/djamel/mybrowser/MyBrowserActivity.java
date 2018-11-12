package com.example.djamel.mybrowser;

import android.app.Activity;
import android.os.Bundle;
import android.widget.TextView;

public class MyBrowserActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.my_browser_activity);

 		String path = getIntent().getDataString();
 if (path.equals(null))
			path = "Null path ";
        TextView textView = (TextView) findViewById(R.id.url);
		textView.setText(path);
	}

}
