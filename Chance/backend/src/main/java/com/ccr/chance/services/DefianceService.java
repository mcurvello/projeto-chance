package com.ccr.chance.services;

import java.util.List;
import java.util.stream.Collectors;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.ccr.chance.dto.DefianceDTO;
import com.ccr.chance.dto.UserDTO;
import com.ccr.chance.entities.Defiance;
import com.ccr.chance.entities.DefianceStatus;
import com.ccr.chance.entities.User;
import com.ccr.chance.repositories.DefianceRepository;
import com.ccr.chance.repositories.UserRepository;

@Service
public class DefianceService {
	@Autowired
	private DefianceRepository repository;
	
	@Autowired
	private UserRepository userRepository;
	
	
	@Transactional(readOnly = true)
	public List<DefianceDTO> findAll(){
		
		List<Defiance> list = repository.findAllByOrderByIdAsc();
		return list.stream().map(x -> new DefianceDTO(x)).collect(Collectors.toList());
	}

	@Transactional
	public DefianceDTO insert(DefianceDTO dto) {
		Defiance defiance = new Defiance(null, dto.getTitle(), dto.getTheme(), dto.getDescription(), dto.getVacancies(), dto.getDeliveryDate(), dto.getImgUri(), DefianceStatus.PENDING);
		for (UserDTO p : dto.getUsers()) {
			User user = userRepository.getOne(p.getId());
			defiance.getMembers().add(user);
		}
		defiance = repository.save(defiance);
		return new DefianceDTO(defiance);
	}
	
	@Transactional
	public DefianceDTO setDelivered(Long id) {
		Defiance defiance = repository.getOne(id);
		defiance.setStatus(DefianceStatus.DELIVERED);
		defiance = repository.save(defiance);
		return new DefianceDTO(defiance);
	}
}

