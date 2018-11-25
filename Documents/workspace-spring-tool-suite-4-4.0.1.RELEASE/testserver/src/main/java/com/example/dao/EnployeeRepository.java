package com.example.dao;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.entites.Enployee;

public interface EnployeeRepository 
extends JpaRepository<Enployee,Long>{

}
