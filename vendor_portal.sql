-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2024 at 11:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendor_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`) VALUES
(1, 'user@test.com', 'user', 'user'),
(2, 'admin@test.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `products` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `email`, `products`) VALUES
(1, 'Mang Inasar', 'manginasal@example.com', 'Chicken Inasal, Halo-Halo, Palabok'),
(2, 'Jollibeebeeebeee', 'jollibee@example.com', 'Chickenjoy, Jolly Spaghetti, Yumburger'),
(3, 'Goldilocks', 'goldilocks@example.com', 'Mocha Cake, Polvoron, Palabok Fiesta'),
(4, 'Chowking', 'chowking@example.com', 'Siopao, Halo-Halo, Chao Fan'),
(6, 'Red Ribbon', 'redribbon@example.com', 'Ube Cake, Mamon, Ensaimada'),
(7, 'Greenwich Pizza', 'greenwich@example.com', 'Hawaiian Overload Pizza, Lasagna Supreme, Overloaded Fries'),
(8, 'J.CO Donuts & Coffee', 'jco@example.com', 'Alcapone Donut, Jcoccino, Glazzy Donuts'),
(9, 'Yellow Cab Pizza', 'yellowcab@example.com', 'New York\'s Finest Pizza, Charlie Chan Chicken Pasta, Hot Wings'),
(10, 'BonChon Chicken', 'bonchon@example.com', 'Korean Fried Chicken, Bibimbowl, Ko-Yo'),
(11, 'Shakey\'s Pizza', 'shakeys@example.com', 'Manager\'s Choice Pizza, Chicken \'n\' Mojos, House Blend Iced Tea'),
(12, 'Krispy Kreme', 'krispykreme@example.com', 'Original Glazed Doughnuts, Coffee, Doughnut Holes'),
(14, 'McDonald\'s', 'mcdonalds@example.com', 'Big Mac, McSpaghetti, McFlurry'),
(15, 'Burger King', 'burgerking@example.com', 'Whopper, Chicken Fries, Hershey\'s Sundae Pie'),
(16, 'Starbucks', 'starbucks@example.com', 'Caramel Macchiato, Green Tea Frappuccino, Chocolate Chip Cookie'),
(17, 'KFC', 'kfc@example.com', 'Original Recipe Chicken, Zinger Burger, Corn & Coleslaw'),
(18, 'Dunkin\' Donuts', 'dunkindonuts@example.com', 'Boston Kreme Donut, Iced Coffee, Bagels'),
(21, 'MediEquip Supplies', 'mediequip@example.com', 'Medical Equipment, Surgical Instruments, Hospital Beds'),
(22, 'PharmaMeds Pharmacy', 'pharmameds@example.com', 'Prescription Drugs, Over-the-counter Medications, Medical Supplies'),
(23, 'LabCorp Diagnostics', 'labcorp@example.com', 'Blood Tests, Urine Analysis, DNA Testing'),
(24, 'Radiant Imaging Center', 'radiantimaging@example.com', 'X-rays, MRI, CT Scans'),
(25, 'Healthy Bites Cafeteria', 'healthybites@example.com', 'Healthy Meals, Snacks, Beverages'),
(26, 'Nurse On-the-Go Services', 'nurseonthego@example.com', 'Nursing Care, Home Health Aides, Medical Assistance'),
(27, 'Elite Medical Consultants', 'elitemedical@example.com', 'Medical Consultation, Second Opinions, Treatment Planning'),
(28, 'Healing Touch Spa', 'healingtouch@example.com', 'Massage Therapy, Aromatherapy, Reflexology'),
(29, 'PhytoCare Herbal Shop', 'phytocare@example.com', 'Herbal Remedies, Supplements, Organic Products'),
(30, 'RehabWorks Physiotherapy', 'rehabworks@example.com', 'Physical Therapy, Rehabilitation Exercises, Injury Prevention'),
(31, 'DentalCare Clinic', 'dentalcare@example.com', 'Dental Checkups, Teeth Cleaning, Fillings, Extractions'),
(32, 'EyeCare Center', 'eyecare@example.com', 'Eye Exams, Contact Lenses, Prescription Glasses, LASIK Surgery'),
(33, 'VitalSigns Medical Supplies', 'vitalsigns@example.com', 'Medical Equipment, First Aid Kits, Personal Protective Gear'),
(34, 'HealthTrack Fitness Center', 'healthtrack@example.com', 'Gym Memberships, Personal Training, Fitness Classes'),
(35, 'Mindful Meditation Studio', 'mindfulmeditation@example.com', 'Meditation Classes, Stress Relief Programs, Mindfulness Workshops'),
(36, 'BioTech Research Lab', 'biotechlab@example.com', 'Biomedical Research, Clinical Trials, Laboratory Testing'),
(37, 'LifeLine Emergency Services', 'lifeline@example.com', 'Ambulance Services, Emergency Response, Medical Evacuation'),
(38, 'PetPals Therapy Animals', 'petpals@example.com', 'Animal-Assisted Therapy, Pet Visits, Emotional Support Animals'),
(39, 'Healing Harmony Music Therapy', 'healingharmony@example.com', 'Music Therapy Sessions, Relaxation Techniques, Sound Healing'),
(40, 'WellnessWise Health Coaching', 'wellnesswise@example.com', 'Health Assessments, Lifestyle Coaching, Nutritional Guidance'),
(41, 'ComfortCare Patient Apparel', 'comfortcare@example.com', 'Hospital Gowns, Patient Robes, Slippers'),
(42, 'MediFusion Integrated Health System', 'medifusion@example.com', 'Integrated Health Services, Primary Care, Specialty Clinics'),
(43, 'HealthyHive Nutrition Services', 'healthyhive@example.com', 'Nutritional Counseling, Meal Planning, Dietitian Services'),
(44, 'MediAlert Medical Alarms', 'medialert@example.com', 'Medical Alert Systems, Emergency Call Buttons, Fall Detection'),
(45, 'PediatricPlay Toy Store', 'pediatricplay@example.com', 'Toys, Games, Books for Children, Pediatric Supplies'),
(46, 'HappyHearts Cardiology Clinic', 'happyhearts@example.com', 'Cardiac Care, Heart Health Screenings, EKG'),
(47, 'RejuvaCare Spa & Wellness Center', 'rejuvacare@example.com', 'Spa Treatments, Massage Therapy, Facial Treatments'),
(48, 'SensorySolutions Therapy Center', 'sensorysolutions@example.com', 'Sensory Integration Therapy, Occupational Therapy, Autism Support'),
(49, 'SeniorSolutions Elderly Care', 'seniorsolutions@example.com', 'Assisted Living Services, Elderly Caregivers, Memory Care Programs'),
(50, 'SmartSteps Diabetes Management', 'smartsteps@example.com', 'Diabetes Education, Blood Sugar Monitoring, Insulin Pump Training'),
(51, 'HealingHands Holistic Health Center', 'healinghands@example.com', 'Acupuncture, Reiki, Energy Healing'),
(52, 'BodyBliss Fitness & Yoga Studio', 'bodybliss@example.com', 'Yoga Classes, Pilates, Meditation Retreats'),
(53, 'NaturesNest Organic Market', 'naturesnest@example.com', 'Organic Foods, Fresh Produce, Health Food Products'),
(54, 'TheraPets Therapy Dogs', 'therapets@example.com', 'Animal-Assisted Therapy, Pet Therapy Training, Therapy Dog Visits'),
(55, 'MentalWellness Counseling Center', 'mentalwellness@example.com', 'Mental Health Counseling, Therapy Sessions, Support Groups'),
(56, 'HealHydrate IV Therapy Clinic', 'healhydrate@example.com', 'IV Hydration Therapy, Vitamin Infusions, Hangover Treatments'),
(57, 'OrthoCare Orthopedic Center', 'orthocare@example.com', 'Orthopedic Surgery, Joint Replacement, Sports Medicine'),
(58, 'MediMinders Medication Management', 'mediminders@example.com', 'Medication Dispensers, Pill Organizers, Medication Reminders'),
(59, 'MindBodyBalance Wellness Studio', 'mindbodybalance@example.com', 'Mindfulness Workshops, Meditation Classes, Stress Reduction Programs'),
(60, 'EcoHealth Environmental Services', 'ecohealth@example.com', 'Environmental Assessments, Indoor Air Quality Testing, EcoFriendly Cleaning Products'),
(61, 'MediTrans Medical Transport', 'meditrans@example.com', 'NonEmergency Medical Transport, Wheelchair Van Service, Patient Shuttle'),
(62, 'BioCare Biomedical Laboratory', 'biocare@example.com', 'Biomedical Testing, Pathology Services, Blood Bank'),
(63, 'Fit4Life Fitness & Rehabilitation', 'fit4life@example.com', 'Fitness Classes, Personal Training, Physical Therapy'),
(64, 'HealthWise Counseling Services', 'healthwise@example.com', 'Health Coaching, Wellness Counseling, Nutrition Therapy'),
(65, 'WellnessWorks Occupational Health', 'wellnessworks@example.com', 'Occupational Health Services, Workplace Wellness Programs, Employee Health Screenings'),
(66, 'PetTherapy Paws & Claws', 'pettherapy@example.com', 'Animal-Assisted Therapy, Pet Visits, Therapy Dog Training'),
(67, 'HealthyHarvest Organic Farm', 'healthyharvest@example.com', 'Organic Farming, Community Supported Agriculture (CSA), Farm Fresh Produce'),
(68, 'SleepSound Sleep Clinic', 'sleepsound@example.com', 'Sleep Studies, CPAP Therapy, Insomnia Treatment'),
(69, 'VisionCare Optometry Center', 'visioncare@example.com', 'Comprehensive Eye Exams, Contact Lenses, Eyeglasses'),
(70, 'Heal&Help Home Care Services', 'healhelp@example.com', 'In-Home Nursing Care, Caregiver Support, Respite Care'),
(71, 'MediFit Medical Equipment Rentals', 'medifit@example.com', 'Medical Equipment Rental, Home Health Supplies, Mobility Aids'),
(72, 'MindfulMinds Mental Health Center', 'mindfulminds@example.com', 'Mental Health Counseling, Psychotherapy, Psychiatry Services'),
(73, 'HealingHarbor Hospice Care', 'healingharbor@example.com', 'Palliative Care, Bereavement Support, End-of-Life Care'),
(74, 'DentalDreams Pediatric Dentistry', 'dentaldreams@example.com', 'Pediatric Dentistry, Kids Dental Checkups, Dental Sealants'),
(75, 'ElderCare Assisted Living Facility', 'eldercare@example.com', 'Assisted Living, Memory Care, Senior Apartments'),
(76, 'RehabRecover Drug Rehabilitation', 'rehabrecover@example.com', 'Drug Rehab Programs, Alcohol Detox, Substance Abuse Counseling'),
(77, 'HealthHorizon Holistic Healing', 'healthhorizon@example.com', 'Holistic Medicine, Naturopathy, Energy Healing'),
(78, 'HappyFeet Podiatry Clinic', 'happyfeet@example.com', 'Podiatry Services, Foot Care, Custom Orthotics'),
(79, 'ThriveTherapy Speech Therapy', 'thrivetherapy@example.com', 'Speech-Language Therapy, Swallowing Disorders, Communication Skills Training'),
(80, 'SerenitySolutions Stress Management', 'serenitysolutions@example.com', 'Stress Reduction Workshops, Relaxation Techniques, Mindfulness Retreats');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
