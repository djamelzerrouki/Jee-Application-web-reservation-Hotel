package com.example.entites;
import java.io.Serializable;
import java.util.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
@Entity
public class Enployee implements Serializable{

    private String name;
    private Date lastaudit;
    public Date getLastaudit() {
        return lastaudit;
    }
    public void setLastaudit(Date lastaudit) {
        this.lastaudit = lastaudit;
    }
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    @Column(name="id")
    private Long id;
    public Long getId() {
        return id;
    }
    public void setId(Long id) {
        this.id = id;
    }
    public String getName() {
        return name;
    }
    public void setName(String name) {
        this.name = name;
    }
     
    public String toString(){
        return id+" | " + name+ " | "+ lastaudit;
    }
	public Enployee( long id,String name, Date lastaudit) {
		super();
		this.name = name;
		this.lastaudit = lastaudit;
		this.id = id;
	}
 
}
