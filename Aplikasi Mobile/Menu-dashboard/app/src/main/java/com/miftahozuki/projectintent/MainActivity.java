package com.miftahozuki.projectintent;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void email(View view){
        Intent intent = new Intent(MainActivity.this, LinierActivity.class);
        startActivity(intent);
    }

    public void date(View view){
        Intent intent = new Intent(MainActivity.this, RelativeActivity.class);
        startActivity(intent);
    }

    public void login(View view){
        Intent intent = new Intent(MainActivity.this, ConstraintActivity.class);
        startActivity(intent);
    }

    public void prodi(View view){
        Intent intent = new Intent(MainActivity.this, FrameLayout.class);
        startActivity(intent);
    }

    public void register(View view){
        Intent intent = new Intent(MainActivity.this, TableLayout.class);
        startActivity(intent);
    }

    public void absensi(View view){
        Intent intent = new Intent(MainActivity.this, MaterialDesign.class);
        startActivity(intent);
    }

    public void pilih_jurusan(View view){
        Intent intent = new Intent(MainActivity.this, ScrollView.class);
        startActivity(intent);
    }

    public void pilih_prodi(View view){
        Intent intent = new Intent(MainActivity.this, ScrollViewHorizontal.class);
        startActivity(intent);
    }
    public void logout(View view){
        Intent intent = new Intent(MainActivity.this, LogoutActivity.class);
        startActivity(intent);
    }
}