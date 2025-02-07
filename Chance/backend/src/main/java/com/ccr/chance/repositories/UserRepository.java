package com.ccr.chance.repositories;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import com.ccr.chance.entities.User;

public interface UserRepository extends JpaRepository<User, Long>{

	List<User> findAllByOrderByIdAsc();
}
