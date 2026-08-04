# Laravel 12 Portfolio Application

A dynamic portfolio website built using Laravel 12 with an admin dashboard for managing projects, skills, experience, education, FAQ, and resume information.

The application is containerized using Docker Compose with PHP-FPM, Nginx, and MySQL services.
---

## 🚀 Features

### Public Website

- Responsive portfolio website
- Dynamic project showcase
- Skills display
- Experience timeline
- Education details
- FAQ section
- Contact section
- Resume download
- SEO optimization
- Dynamic content management

### Admin Dashboard

- Admin authentication
- Manage projects
- Manage skills
- Manage experience
- Manage education
- Manage personal information
- Manage FAQ
- Upload project images
- Resume upload management
- Visitor tracking
- Dashboard statistics

---

# 🛠 Technology Stack

## Backend

- PHP 8.2
- Laravel 12
- Laravel Blade

## Frontend

- HTML5
- CSS3
- Bootstrap
- JavaScript
- jQuery

## Database

- MySQL 8

## Tools

- Composer
- Node.js
- npm
- Git
- GitHub

## DevOps

- Docker
- Docker Compose
- Nginx
- PHP-FPM
- GitHub Actions
- Amazon ECR
- AWS EC2

## Deployment

- GitHub Actions CI/CD
- Docker Image Build
- Amazon ECR
- AWS EC2
- Nginx Reverse Proxy
- HTTPS (Future Enhancement)
---

# 🐳 Docker Setup

The application is fully containerized using Docker Compose.

- **app** - PHP 8.2 FPM running the Laravel application
- **nginx** - Web server
- **mysql** - MySQL 8 database

---

## Environment Setup

```bash
cp .env.docker.example .env.docker
cp .env.mysql.example .env.mysql
```

Generate the Laravel application key:

```bash
docker compose exec app php artisan key:generate
```
---

# Project Structure

portfolio/
├── app/
├── bootstrap/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
├── docker/
│   ├── mysql/
│   │   └── my.cnf
│   ├── nginx/
│   │   └── default.conf
│   └── php/
│       ├── opcache.ini
│       ├── php.ini
│       └── www.conf
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── .dockerignore
├── .gitignore
├── compose.yaml
├── Dockerfile
├── composer.json
├── composer.lock
├── package.json
├── package-lock.json
└── README.md

---

# Running Application Using Docker

## Clone Repository

```bash
git clone <repository-url>
cd portfolio
```

## Build Docker Containers

```bash
docker compose build
```

## Start Containers

```bash
docker compose up -d
```

## Install Composer Dependencies

```bash
docker compose exec app composer install
```

## Run Database Migration

```bash
docker compose exec app php artisan migrate --seed
```

## Create Storage Link

```bash
docker compose exec app php artisan storage:link
```

## Open Application

```text
http://localhost
```
---

# CI/CD Pipeline

The project uses GitHub Actions for automated Docker image validation and deployment workflow.

Pipeline Flow:

1. Developer pushes code to GitHub
2. GitHub Actions triggers workflow
3. Docker image is built and validated
4. Image is pushed to Amazon ECR
5. EC2 pulls latest Docker image
6. Application runs using Docker Compose

---

# Screenshots

## Portfolio Home Page

![Home](screenshots/home.png)

## Portfolio About Page

![About](screenshots/about.png)

## Skills

![Skills](screenshots/skills.png)

## Projects

![Projects](screenshots/projects.png)

## Experience

![Experience](screenshots/experience.png)

## Services

![Services](screenshots/services.png)

## Current Learnings

![Current Learnings](screenshots/learnings.png)

## FAQ

![FAQ](screenshots/faq.png)

## CONTACT

![Contact](screenshots/contact.png)



## Admin - Project Management

![Admin Dashboard](screenshots/portfolio-admin-dashboard.png)

## Admin Showlist

![Admin Dashboard Showlist](screenshots/portfolio-admin-dashboard-showlist.png)

## Admin Profile

![Admin Profile](screenshots/portfolio-admin-profile.png)

## Admin Project

![Admin Project](screenshots/portfolio-admin-project.png)

## Admin Edit Project

![Admin Project Edit](screenshots/portfolio-admin-editProject.png)

## Admin Skills

![Admin Skills](screenshots/portfolio-admin-skills.png)

## Admin Edit Skills

![Admin Skills Edit](screenshots/portfolio-admin-skillEdit.png)


## Admin Skill Category

![Admin Skill Category](screenshots/portfolio-admin-skillcategory.png)


## Admin Experience

![Admin Experience](screenshots/portfolio-admin-experience.png)


## Admin Education

![Admin Education](screenshots/portfolio-admin-education.png)

## Admin Learnings

![Admin Learnings](screenshots/portfolio-admin-currentLearnings.png)


## Admin Service

![Admin Service](screenshots/portfolio-admin-services.png)


## Admin workflow

![CICD workflow](screenshots/workflow.png)


## AWS EC2 Instance

![AWS EC2 Instance](screenshots/portfolio-AWS-EC2.png)


## AWS ECR Image

![AWS ECR Image](screenshots/portfolio-AWS-ECR-Image.png)


## Docker Terminal EC2

![Docker Terminal EC2](screenshots/docker-terminal-ec2.png)



## Future Improvements

- Configure custom domain
- Enable HTTPS using SSL certificate
- Add automated database backup
- Add monitoring using Prometheus and Grafana
- Implement Redis caching

---

## Author

**Sarita Pal**

Full Stack PHP Developer

**Tech Stack**

- Laravel
- PHP
- MySQL
- Docker
- Git
- AWS

## Acknowledgements

This project incorporates third-party open-source software and assets.

- Laravel Framework
- AdminLTE
- Bootstrap
- Other frontend libraries as included in the project

All third-party components remain subject to their respective licenses.
