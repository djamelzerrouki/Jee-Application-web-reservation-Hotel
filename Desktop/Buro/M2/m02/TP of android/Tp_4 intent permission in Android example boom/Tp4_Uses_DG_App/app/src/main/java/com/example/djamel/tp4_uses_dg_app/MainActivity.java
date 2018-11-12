package com.example.djamel.tp4_uses_dg_app;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void Go_To_DG_App(View view) {

        Intent intent = new Intent();
        intent.setAction("com.example.djamel.tp_4_dg_app_Run");
        intent.addCategory("android.intent.category.DEFAULT");
        startActivity(intent);
        Toast.makeText(this,"hi jimmi",Toast.LENGTH_LONG).show();


        //startActivity(new Intent("course.labs.permissions.DANGEROUS_ACTIVITY"));

    }
}
