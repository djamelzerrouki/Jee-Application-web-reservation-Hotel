package com.example.entites;
import java.util.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
@Entity
public class mytabl1 {
@Id
@GeneratedValue(strategy = GenerationType.AUTO)
 @Column(name="id")
private Long id ;
private String ch1 ;
public String getch1() { ;
 return ch1; 
}
private String ch2 ;
public String getch2() { ;
 return ch2; 
}
private String ch3 ;
public String getch3() { ;
 return ch3; 
}
private String ch4 ;
public String getch4() { ;
 return ch4; 
}
private String ch5 ;
public String getch5() { ;
 return ch5; 
}
}
