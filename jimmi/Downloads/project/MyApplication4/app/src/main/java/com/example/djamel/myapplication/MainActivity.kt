package com.example.djamel.myapplication

import android.support.v7.app.AppCompatActivity
import android.os.Bundle
import android.util.Log
import android.view.View
import android.widget.Button
import android.widget.Toast
import kotlinx.android.synthetic.main.activity_main.*
import java.util.*

class MainActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

    }
  fun select( view : View ){
      val btnSelcted = view as Button
      var code =0
      when(btnSelcted.id){
          R.id.button->code=1
          R.id.button2->code=2
          R.id.button3->code=3
          R.id.button4->code=4
          R.id.button5->code=5
          R.id.button6->code=6
          R.id.button7->code=7
          R.id.button8->code=8
          R.id.button9->code=9

      }
      playGame(code,btnSelcted)
      ChooseWinner()
  }
      var player1=ArrayList<Int>()
      var player2=ArrayList<Int>()
      var activePlayer=1
      fun playGame(codeID:Int,buChoise:Button){
          if (activePlayer==1){
              buChoise.text="X"
              buChoise.setBackgroundResource(R.color.blue)
              player1.add(codeID)
              activePlayer=2
              AutoPleyar()
          } else if (activePlayer==2){
              buChoise.text="O"
              buChoise.setBackgroundResource(R.color.green)
              player2.add(codeID)
              activePlayer=1
          }
buChoise.isEnabled=false
      }

    fun ChooseWinner(){
var winner=0
    if (player1.contains(1)&&player1.contains(2)&&player1.contains(3)) winner=1
    if (player1.contains(4)&&player1.contains(5)&&player1.contains(6)) winner=1
    if (player1.contains(7)&&player1.contains(8)&&player1.contains(9)) winner=1
    if (player1.contains(1)&&player1.contains(4)&&player1.contains(7)) winner=1
    if (player1.contains(2)&&player1.contains(5)&&player1.contains(8)) winner=1
    if (player1.contains(3)&&player1.contains(6)&&player1.contains(9)) winner=1
        if (player1.contains(1)&&player1.contains(5)&&player1.contains(9)) winner=1
        if (player1.contains(3)&&player1.contains(5)&&player1.contains(7)) winner=1


    if (player2.contains(1)&&player2.contains(2)&&player2.contains(3)) winner=2
    if (player2.contains(4)&&player2.contains(5)&&player2.contains(6)) winner=2
    if (player2.contains(7)&&player2.contains(8)&&player2.contains(9)) winner=2
    if (player2.contains(1)&&player2.contains(4)&&player2.contains(7)) winner=2
    if (player2.contains(2)&&player2.contains(5)&&player2.contains(8)) winner=2
    if (player2.contains(3)&&player2.contains(6)&&player2.contains(9)) winner=2
        if (player2.contains(1)&&player2.contains(5)&&player2.contains(9)) winner=2
        if (player2.contains(3)&&player2.contains(5)&&player2.contains(7)) winner=2

        if(winner!=0){
 Toast.makeText(this, "Player "+winner+" win the game!",Toast.LENGTH_LONG).show()
            restrt()
        }
    }
    fun AutoPleyar(){
        val emtyCells=ArrayList<Int>()
        for (codeID in 1..9){
            if (!(player1.contains(codeID)||player2.contains(codeID))){
                emtyCells.add(codeID)
          }
        }
        val r=Random()
        if (!emtyCells.isEmpty()){
     // Log.d( callingPackage,"############## "+emtyCells.size)
        val randIndex=r.nextInt(emtyCells.size)
         val CellId =emtyCells[randIndex]
        val btnSelcted:Button?
        when(CellId){
            1->btnSelcted=button
            2->btnSelcted=button2
            3->btnSelcted=button3
            4->btnSelcted=button4
            5->btnSelcted=button5
            6->btnSelcted=button6
            7->btnSelcted=button7
            8->btnSelcted=button8
            9->btnSelcted=button9
        else->btnSelcted=button
        }
        playGame(CellId,btnSelcted)}
    }

      fun restrt() {
          button.text=""
          button2.text=""
          button3.text=""
          button4.text=""
          button5.text=""
          button6.text=""
          button7.text=""
          button8.text=""
          button9.text=""
          button.setBackgroundResource(R.color.white)
          button2.setBackgroundResource(R.color.white)
          button3.setBackgroundResource(R.color.white)
          button4.setBackgroundResource(R.color.white)
          button5.setBackgroundResource(R.color.white)
          button6.setBackgroundResource(R.color.white)
          button7.setBackgroundResource(R.color.white)
          button8.setBackgroundResource(R.color.white)
          button9.setBackgroundResource(R.color.white)
          player1.clear()
          player2.clear()
          button.isEnabled=true
          button2.isEnabled=true
          button3.isEnabled=true
          button4.isEnabled=true
          button5.isEnabled=true
          button6.isEnabled=true
          button7.isEnabled=true
          button8.isEnabled=true
          button9.isEnabled=true


      }

}
