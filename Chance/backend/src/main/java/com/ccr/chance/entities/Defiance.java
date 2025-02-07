package com.ccr.chance.entities;

import java.io.Serializable;
import java.util.Date;
import java.util.HashSet;
import java.util.Set;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.JoinTable;
import javax.persistence.ManyToMany;
import javax.persistence.Table;

@Entity
@Table(name = "tb_defiance")
public class Defiance implements Serializable{

	private static final long serialVersionUID = 1L;
	
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Long id;
	private String title;
	private String theme;
	private String description;
	private int vacancies;
	private Date deliveryDate;
	private String imgUri;
	private DefianceStatus status;
	
	
	@ManyToMany
	@JoinTable(name = "tb_company_user", 
		joinColumns = @JoinColumn(name = "company_id"),
		inverseJoinColumns = @JoinColumn(name = "user_id"))
	private Set<User> members = new HashSet<>();
	
	public Defiance() {
		
	}

	public Defiance(Long id, String title, String theme, String description, int vacancies, Date deliveryDate,
			String imgUri, DefianceStatus status) {
		super();
		this.id = id;
		this.title = title;
		this.theme = theme;
		this.description = description;
		this.vacancies = vacancies;
		this.deliveryDate = deliveryDate;
		this.imgUri = imgUri;
		this.status = status;
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

	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + ((id == null) ? 0 : id.hashCode());
		return result;
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		Defiance other = (Defiance) obj;
		if (id == null) {
			if (other.id != null)
				return false;
		} else if (!id.equals(other.id))
			return false;
		return true;
	}

	public Set<User> getMembers() {
		return members;
	}

}
