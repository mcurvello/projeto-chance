package com.ccr.chance.repositories;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import com.ccr.chance.entities.Company;

public interface CompanyRepository extends JpaRepository<Company, Long>{

	List<Company> findAllByOrderByIdAsc();
}
