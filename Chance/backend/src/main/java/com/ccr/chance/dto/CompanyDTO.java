package com.ccr.chance.dto;

import java.io.Serializable;

import com.ccr.chance.entities.Company;
import com.ccr.chance.entities.Defiance;
import com.ccr.chance.entities.InterestArea;

public class CompanyDTO implements Serializable{
	
	private static final long serialVersionUID = 1L;
	
	private Long id;
	private String name;
	private String email;
	private String username;
	private String password;
	private InterestArea area1;
	private InterestArea area2;
	private Defiance companyDefiance;
	
	public CompanyDTO() {
		
	}

	public CompanyDTO(Long id, String name, String email, String username, String password, InterestArea area1,
			InterestArea area2, Defiance companyDefiance) {
		this.id = id;
		this.name = name;
		this.email = email;
		this.username = username;
		this.password = password;
		this.area1 = area1;
		this.area2 = area2;
		this.companyDefiance = companyDefiance;
	}
	
	public CompanyDTO(Company company) {
		id = company.getId();
		name = company.getName();
		email = company.getEmail();
		username = company.getUsername();
		password = company.getPassword();
		area1 = company.getArea1();
		area2 = company.getArea2();
		companyDefiance = company.getCompanyDefiance();
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

	public Defiance getCompanyDefiance() {
		return companyDefiance;
	}

	public void setCompanyDefiance(Defiance companyDefiance) {
		this.companyDefiance = companyDefiance;
	}
	
	
}
