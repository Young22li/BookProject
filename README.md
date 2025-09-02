# 🚀 CodeIgniter Project with Docker

This project runs on **CodeIgniter** and **MySQL** using Docker.  
Follow the steps below to set up your local environment.

---

## 1. Prerequisites
Make sure you have installed:
- [Docker](https://docs.docker.com/get-docker/)  
- [Docker Compose](https://docs.docker.com/compose/)  

Check versions:
```bash
docker --version
docker compose version
```

## 2. Clone the Project
```
git clone https://github.com/Young22li/BookProject.git
cd BookProject
```
## 3. Start the Project
Run
```
docker compose up -d
```
This will start:

* CodeIgniter app container

* MySQL database container

## 4. Initialize the Database
Go to http://localhost:8081
```
Server: mysql_db
Username: root
password: toor
```

1. Click the flower database on the left
2. Click the “Import” button above
3. Click the “ Choose File” button, then select the file named “DB.sql” inside the “ci_app” folder. After selecting it, scroll down to the bottom and click the “Import” button.

## 5. Access the Application
Open your browser:
Go to http://localhost:8080

## 6. My thoughts
Some of my design decisions for this project are documented in this <a href="https://docs.google.com/document/d/1gpOTpmQWgffsOb85ZgBQBMbN2qV7DlU_iC_bRS2Xli8/edit?usp=sharing">Google Doc</a>


