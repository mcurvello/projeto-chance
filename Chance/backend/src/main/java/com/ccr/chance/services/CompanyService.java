package com.ccr.chance.services;

import java.util.List;
import java.util.stream.Collectors;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.ccr.chance.dto.CompanyDTO;
import com.ccr.chance.entities.Company;
import com.ccr.chance.repositories.CompanyRepository;

@Service
public class CompanyService {

	@Autowired
	private CompanyRepository repository;
	
	@Transactional(readOnly = true)
	public List<CompanyDTO> findAll(){
		
		List<Company> list = repository.findAllByOrderByIdAsc();
		return list.stream().map(x -> new CompanyDTO(x)).collect(Collectors.toList());
	}
}
