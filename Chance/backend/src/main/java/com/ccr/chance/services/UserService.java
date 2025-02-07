package com.ccr.chance.services;

import java.util.List;
import java.util.stream.Collectors;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.ccr.chance.dto.UserDTO;
import com.ccr.chance.entities.User;
import com.ccr.chance.repositories.UserRepository;

@Service
public class UserService {

	@Autowired
	private UserRepository repository;
	
	
	@Transactional(readOnly = true)
	public List<UserDTO> findAll(){
		
		List<User> list = repository.findAllByOrderByIdAsc();
		return list.stream().map(x -> new UserDTO(x)).collect(Collectors.toList());
	}
	
}
