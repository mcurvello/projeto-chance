package com.ccr.chance.controllers;

import java.net.URI;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.servlet.support.ServletUriComponentsBuilder;

import com.ccr.chance.dto.DefianceDTO;
import com.ccr.chance.services.DefianceService;

@RestController
@RequestMapping(value = "/defiances")
public class DefianceController {

	@Autowired
	private DefianceService service;
	
	@GetMapping
	public ResponseEntity<List<DefianceDTO>> findAll(){
		List<DefianceDTO> list = service.findAll();
		return ResponseEntity.ok().body(list);
	}
	
	@PostMapping
	public ResponseEntity<DefianceDTO> insert(@RequestBody DefianceDTO dto) {
		dto = service.insert(dto);
		URI uri = ServletUriComponentsBuilder.fromCurrentRequest().path("/{id}").buildAndExpand(dto.getId()).toUri();
		return ResponseEntity.created(uri).body(dto);
	}
	
	@PutMapping("/{id}/delivered")
	public ResponseEntity<DefianceDTO> setDelivered(@PathVariable Long id){
		DefianceDTO dto = service.setDelivered(id);
		return ResponseEntity.ok().body(dto);
	}
}
