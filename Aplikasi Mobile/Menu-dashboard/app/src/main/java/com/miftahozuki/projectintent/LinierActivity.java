package com.miftahozuki.projectintent;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

public class LinierActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.linier_layout);
    }
    public void kembali(View view) {
        Intent intent = new Intent(LinierActivity.this, MainActivity.class);
        finish();
    }
}