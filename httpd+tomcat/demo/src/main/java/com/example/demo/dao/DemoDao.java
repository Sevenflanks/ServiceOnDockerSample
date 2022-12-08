package com.example.demo.dao;

import com.example.demo.entity.DemoEntity;
import org.springframework.data.jpa.repository.JpaRepository;

public interface DemoDao extends JpaRepository<DemoEntity, Long> {
}
