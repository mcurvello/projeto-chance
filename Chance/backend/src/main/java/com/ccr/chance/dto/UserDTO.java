package com.ccr.chance.dto;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.HashSet;
import java.util.List;
import java.util.Set;

import com.ccr.chance.entities.Defiance;
import com.ccr.chance.entities.InterestArea;
import com.ccr.chance.entities.User;

public class UserDTO implements Serializable{

	private static final long serialVersionUID = 1L;
	
	private Long id;
	private String name;
	private String email;
	private String username;
	private String password;
	private InterestArea area1;
	private InterestArea area2;
	
	private List<CompanyDTO> company = new ArrayList<>();
	
	private Set<Defiance> defiances = new HashSet<>();
	
	public UserDTO() {
		
	}

	public UserDTO(Long id, String name, String email, String username, String password, InterestArea area1,
			InterestArea area2) {
		this.id = id;
		this.name = name;
		this.email = email;
		this.username = username;
		this.password = password;
		this.area1 = area1;
		this.area2 = area2;
	}
	
	public UserDTO(User entity) {
		id = entity.getId();
		name = entity.getName();
		email = entity.getEmail();
		username = entity.getUsername();
		password = entity.getPassword();
		area1 = entity.getArea1();
		area2 = entity.getArea2();
	}

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getUsername() {
		return username;
	}

	public void setUsername(String username) {
		this.username = username;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public InterestArea getArea1() {
		return area1;
	}

	public void setArea1(InterestArea area1) {
		this.area1 = area1;
	}

	public InterestArea getArea2() {
		return area2;
	}

	public void setArea2(InterestArea area2) {
		this.area2 = area2;
	}

	public List<CompanyDTO> getCompany() {
		return company;
	}

	public void setCompany(List<CompanyDTO> company) {
		this.company = company;
	}

	public Set<Defiance> getDefiances() {
		return defiances;
	}

	public void setDefiances(Set<Defiance> defiances) {
		this.defiances = defiances;
	}
	
	
	
}
