package com.ccr.chance.repositories;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import com.ccr.chance.entities.Defiance;

public interface DefianceRepository extends JpaRepository<Defiance, Long>{

	List<Defiance> findAllByOrderByIdAsc();
}




