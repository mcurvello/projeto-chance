package com.ccr.chance.dto;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import com.ccr.chance.entities.Defiance;
import com.ccr.chance.entities.DefianceStatus;

public class DefianceDTO implements Serializable{
	
	private static final long serialVersionUID = 1L;
	
	private Long id;
	private String title;
	private String theme;
	private String description;
	private int vacancies;
	private Date deliveryDate;
	private String imgUri;
	private DefianceStatus status;
	
	private List<UserDTO> users = new ArrayList<>();
	
	public DefianceDTO() {
		
	}
	
	public DefianceDTO(Long id, String title, String theme, String description, int vacancies, Date deliveryDate,
			String imgUri, DefianceStatus status) {
		this.id = id;
		this.title = title;
		this.theme = theme;
		this.description = description;
		this.vacancies = vacancies;
		this.deliveryDate = deliveryDate;
		this.imgUri = imgUri;
		this.status = status;
	}

	public DefianceDTO(Defiance entity) {
		id = entity.getId();
		title = entity.getTitle();
		theme = entity.getTheme();
		description = entity.getDescription();
		vacancies = entity.getVacancies();
		deliveryDate = entity.getDeliveryDate();
		imgUri = entity.getImgUri();
		status = entity.getStatus();
	}

	
	
	public DefianceStatus getStatus() {
		return status;
	}

	public void setStatus(DefianceStatus status) {
		this.status = status;
	}

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getTitle() {
		return title;
	}

	public void setTitle(String title) {
		this.title = title;
	}

	public String getTheme() {
		return theme;
	}

	public void setTheme(String theme) {
		this.theme = theme;
	}

	public String getDescription() {
		return description;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	public int getVacancies() {
		return vacancies;
	}

	public void setVacancies(int vacancies) {
		this.vacancies = vacancies;
	}

	public Date getDeliveryDate() {
		return deliveryDate;
	}

	public void setDeliveryDate(Date deliveryDate) {
		this.deliveryDate = deliveryDate;
	}

	public String getImgUri() {
		return imgUri;
	}

	public void setImgUri(String imgUri) {
		this.imgUri = imgUri;
	}

	public List<UserDTO> getUsers() {
		return users;
	}

	public void setUsers(List<UserDTO> users) {
		this.users = users;
	}
	

}