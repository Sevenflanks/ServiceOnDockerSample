package com.example.demo.web;

import com.example.demo.dao.DemoDao;
import com.example.demo.entity.DemoEntity;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import java.util.UUID;

@Controller
public class DemoCtrl {

	@Autowired
	private DemoDao demoDao;

	@GetMapping
	public String demo(Model model) {
		final DemoEntity entity = DemoEntity.builder()
				.code("Hello")
				.name(UUID.randomUUID().toString())
				.build();

		model.addAttribute("demo", demoDao.save(entity));

		return "hello";
	}

}
