<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://urbancode.in/images/icon.png">

<!--hero section code-->
    
  
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

 
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Source+Sans+3:wght@400;500;600;700;800&display=swap">






    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1166375174468303');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1166375174468303&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

   <?php 
        $baseurl = 'https://urbancode.in/';
        $url = $_SERVER['REQUEST_URI'];
        $exp = explode("/",$url);
        $end = end($exp);
        $endex = explode(".",strval($end));
        $metatitle = "Urbancode Software Training Institute for IT Courses";
        $metadescription = "IT and Software courses with guidance from industry experts. Enquire now for Langauage proficiency, Overseas education and career development.";
        $keywords = "IT Courses, Software Training, Language Proficiency, Overseas Education, Career Development, Professional IT Training, Tech Workshops, Online IT Courses, Offline IT Courses, Industry Expert Guidance, Beginner to Advanced IT Training, Certification Courses, IT Skill Development, Programming Languages, Web Development, Mobile App Development, Data Analysis, Machine Learning, Cloud Computing, Digital Marketing Strategies, SEO Optimization, Google Ads Training, Social Media Marketing, Email Marketing, Python Programming, Java Training, SQL Database Management, Power BI Insights, Data Visualization Tools, Tableau Skills, AWS Certification, Azure Solutions, Google Cloud Platform, SAS Analysis, Java Programming, IELTS Preparation, TOEFL Coaching, PTE Academic Test, OET Training, French Language Classes, German Language Proficiency, App Inventor for Kids, Scratch Programming, Python for Kids, Web Design Courses, Spoken English Classes, Medical Coding Certification, Career Transition Services, Study Abroad Consultation, Tech Event Networking, Part-time Educator Opportunities, Referral Program Benefits";
        $image = $baseurl . "images/courses/courses.jpg";
        
         
        if($endex[0]==''){
          $metatitle = "Urbancode Edutech Solutions Pvt Ltd";
          $metadescription = "IT and Software courses with guidance from industry experts. Enquire now for Language proficiency, Overseas education, and career development.";
          $keywords = "IT Courses, Software Training, Language Proficiency, Overseas Education, Career Development";
          $canonical = "https://urbancode.in/";
      }
      else if($endex[0]=='digital-marketing'){
          $metatitle = "Urbancode Digital Marketing Course | Online and Offline";
          $metadescription = "Learn Digital marketing strategies with SEO, PPC, Google Ads, content marketing, social media, email, and more. Stay updated with the latest trends";
          $keywords = "Digital Marketing, SEO, PPC, Google Ads, Content Marketing, Social Media Marketing, Email Marketing";
          $canonical = "https://urbancode.in/digital-marketing";
      }
     
  else if($endex[0]=='ielts'){
      $metatitle = "Urbancode IELTS (Academic & General) Training Course by Expert";
      $metadescription = "Improve your band scores with Urbancode's IELTS course. Enroll today, get free counselling, choose the university best suitable for you. Get scholarship and loan assistance.";
      $canonical = "https://urbancode.in/ielts";
      $keywords = "IELTS, IELTS Training, Band Score Improvement, IELTS Academic, IELTS General, Overseas Education";
  }
  else if($endex[0]=='toefl'){
      $metatitle = "Urbancode TOEFL (Test of English as a Foreign Language) Course";
      $metadescription = "Get high TOEFL score with our training program with experts. Get course materials for practicing all 4 skills, take the course in your flexible schedule. Intensive training with exercises and practice sessions.";
      $canonical = "https://urbancode.in/toefl";
      $keywords = "TOEFL, TOEFL Training, Test of English as a Foreign Language, TOEFL Preparation, Overseas Education";
  }
  else if($endex[0]=='pte'){
      $metatitle = "Urbancode PTE (Pearson Test of English) Course";
      $metadescription = "PTE academic test course specifically designed for students who desire to study abroad. Exercise and practice sessions to improve score in all 4 skills.";
      $canonical = "https://urbancode.in/pte";
      $keywords = "PTE, Pearson Test of English, PTE Preparation, PTE Academic Test, Overseas Education";
  }
 
  else if($endex[0]=='french'){
      $metatitle = "Urbancode French Language Course | Online and Offline";
      $metadescription = "Learn French in 2 months, get trained by experts. Beginning from A1 level to B2 Level. To improve your French speaking skills, Enroll today!";
      $canonical = "https://urbancode.in/french";
      $keywords = "French Language, Learn French, French Speaking, French Proficiency, French for Beginners";
  }
  else if($endex[0]=='german'){
      $metatitle = "Urbancode German Language Course | Online and Offline";
      $metadescription = "Speak in German Language in 2 months, get trained by experts. Beginning from A1 to B2 level. Improve your German in reading, writing, speaking, and listening skills.";
      $canonical = "https://urbancode.in/german";
      $keywords = "German Language, Learn German, German Speaking, German Proficiency, German for Beginners";
  }
  else if($endex[0]=='appinventor'){
      $metatitle = "Urbancode App Inventor Course for Kids";
      $metadescription = "Coding classes for kids. Engage your children (aged 7-15) in creative technology, attend the gamified coding classes. Fun-filled live sessions with 15+ projects and activities, online and classroom sessions.";
      $canonical = "https://urbancode.in/appinventor";
      $keywords = "App Inventor, Coding for Kids, App Inventor Course, Creative Technology, Kids Coding";
  }
  else if($endex[0]=='scratch'){
      $metatitle = "Urbancode Scratch Coding Course for Kids";
      $metadescription = "Enroll your kids to learn block-based programming language. Get Harvard or Google certified with this course, it also includes 15+ projects teaching the fundamentals of programming.";
      $canonical = "https://urbancode.in/scratch";
      $keywords = "Scratch Coding, Block-based Programming, Coding for Kids, Scratch Programming, Google Certified Kids Courses";
  }
  else if($endex[0]=='pythonjr'){
      $metatitle = "Urbancode Python Coding Course for Kids";
      $metadescription = "Improve the problem-solving skills for your kids. Enroll them in beginner python programming course. This course includes live coding projects teaching the fundamentals of python programming.";
      $canonical = "https://urbancode.in/pythonjr";
      $keywords = "Python for Kids, Python Junior Course, Kids Python Programming, Problem Solving, Coding for Kids";
  }
  else if($endex[0]=='webdesignforkids'){
      $metatitle = "Urbancode Web Designing for Kids";
      $metadescription = "Enroll your kids (aged 12-16) to Web Designing, it enhances their creative and critical thinking skills. This 4 months course focuses on teaching the basics of website building to kids.";
      $canonical = "https://urbancode.in/webdesignforkids";
      $keywords = "Web Design for Kids, Kids Website Building, Creative Thinking for Kids, Web Designing Course, Coding for Kids";
  }
  else if($endex[0]=='spoken-english'){
      $metatitle = "Urbancode Spoken English Course | Improve Your Communication Skills";
      $metadescription = "Enhance your English communication skills with Urbancode's Spoken English course. Whether you're a beginner or looking to improve fluency, our structured lessons focus on pronunciation, vocabulary, and everyday conversational English.";
      $canonical = "https://urbancode.in/spoken-english";
      $keywords = "Spoken English, English Communication, English Fluency, Conversational English, Improve Pronunciation";
  }
  else if($endex[0]=='medical-coding'){
      $metatitle = "Urbancode Medical Coding Course | Medical Coding Training Certification";
      $metadescription = "Start a career in healthcare with Urbancode's Medical Coding course. Learn essential skills such as medical terminology, coding standards (ICD-10, CPT, HCPCS), and healthcare regulations. This course will equip you to work in hospitals, clinics, and other medical institutions.";
      $canonical = "https://urbancode.in/medical-coding";
      $keywords = "Medical Coding, Medical Coding Certification, Healthcare Jobs, ICD-10 Coding, CPT, HCPCS";
  }
  else if($endex[0]=='fpp'){
      $metatitle = "Urbancode Freshers Placement Program";
      $metadescription = "A comprehensive program dedicated to helping fresh graduates land their first job in top companies.";
      $canonical = "https://urbancode.in/fpp";
      $keywords = "Freshers Placement Program, Graduate Jobs, Career Placement, Job Assistance, First Job Program";
  }
  else if($endex[0]=='ielts-workshop') {
      $metatitle = "Urbancode One-Day IELTS Workshop";
      $metadescription = "Join our intensive one-day IELTS workshop to boost your exam readiness with expert strategies and tips for achieving high scores.";
      $canonical = "https://urbancode.in/ielts-workshop";
      $keywords = "IELTS Workshop, One-Day IELTS, IELTS Exam Preparation, IELTS Strategies, Boost IELTS Score";
  }
  
  else if($endex[0]=='aws-bootcamp') {
      $metatitle = "AWS Cloud Bootcamp - Transform Your Career with Urbancode";
      $metadescription = "Embark on a transformative journey with our AWS Cloud Bootcamp. Designed for beginners and professionals alike, this program offers deep dives into AWS core services, hands-on lab experiences, and preparation for AWS certification.";
      $canonical = "https://urbancode.in/aws-bootcamp";
      $keywords = "AWS Bootcamp, Cloud Computing, AWS Certification, Cloud Solutions, Hands-on Labs, AWS Services";
  }
  else if($endex[0]=='ui-ux') {
      $metatitle = "UI/UX Design Course - Elevate Your Design Skills with Urbancode";
      $metadescription = "Advance your career with our UI/UX Design Course. Tailored for both beginners and seasoned professionals, this course delves into fundamental and advanced design principles, user experience strategies, and hands-on design projects to enhance your portfolio.";
      $canonical = "https://urbancode.in/ui-ux";
      $keywords = "UI/UX Design, UI/UX Course, User Experience Design, Design Principles, Portfolio Enhancement, UI/UX Training";
  }     
  
else if($endex[0]=='study-abroad'){
    $metatitle = "Urbancode Study Abroad";
    $metadescription = "Make your dream of overseas education come true! Enroll now for free consultation. Free Expert Guidance, scholarship assistance, Loan Assistance, Priority Application Processing, and Tie-ups with 500+ universities globally.";
    $canonical = "https://urbancode.in/study-abroad";
    $keywords = "Study Abroad, Overseas Education, Free Consultation, Scholarship Assistance, Loan Assistance, University Tie-ups";
}
else if($endex[0]=='c-cplusplus'){
  $metatitle = "Urbancode C/C++ Programming Course";
  $metadescription = "Master C and C++ programming with Urbancode's comprehensive course. Enhance your coding skills with in-depth lessons, practical exercises, and real-world projects. Enroll now for a career in software development.";
  $canonical = "https://urbancode.in/c-cplusplus";
  $keywords = "C Programming, C++ Programming, C/C++ Course, Software Development, Coding Skills, Programming Language";
}
else if($endex[0]=='gcp'){
  $metatitle = "Urbancode Google Cloud Platform (GCP) Course";
  $metadescription = "Master Google Cloud Platform (GCP) with Urbancode's expert-led course. Learn cloud computing, storage, machine learning, and more with practical hands-on experience. Enroll now to accelerate your career in cloud technology.";
  $canonical = "https://urbancode.in/gcp";
  $keywords = "Google Cloud Platform, GCP Course, Cloud Computing, Cloud Storage, Machine Learning, GCP Training, Cloud Technology";
}

else if($endex[0]=='graphics-design-demo') {
  $metatitle = "Graphic Design Demo Class - Unleash Your Creativity with Urbancode";
  $metadescription = "Join our free Graphic Design Demo Class and explore the fundamentals of design, tools like Photoshop and Illustrator, and live project workflows. Perfect for beginners and aspiring designers!";
  $canonical = "https://urbancode.in/graphics-design-demo";
  $keywords = "Graphic Design Demo, Learn Graphic Design, Photoshop Basics, Illustrator, Design Principles, Creative Tools, Live Projects, Design Class";
}

else if($endex[0]=='mongodb'){
  $metatitle = "Urbancode MongoDB Course";
  $metadescription = "Learn MongoDB with Urbancode’s hands-on course. Master NoSQL database management, learn to design collections, perform complex queries, and scale applications efficiently. Gain practical experience with MongoDB's powerful features and real-world projects. Enroll now to become a MongoDB expert!";
  $canonical = "https://urbancode.in/mongodb";
  $keywords = "MongoDB, NoSQL, MongoDB Course, Database Management, MongoDB Queries, NoSQL Database, Data Modeling, Database Scaling, MongoDB Projects";
}

else if($endex[0]=='canvas'){
  $metatitle = "Urbancode Canvas Design Course";
  $metadescription = "Unlock your creativity with Urbancode's Canvas Design course. Learn to create engaging digital designs for social media, marketing, and presentations using Canvas tools and techniques. Enroll now to bring your ideas to life with ease!";
  $canonical = "https://urbancode.in/canvas";
  $keywords = "Canvas Design, Digital Design, Social Media Graphics, Marketing Design, Presentation Design, Canva Course, Graphic Design, Visual Content Creation";
}

else if($endex[0]=='gcp'){
  $metatitle = "Urbancode Google Cloud Platform (GCP) Course";
  $metadescription = "Build expertise in cloud computing with Urbancode's GCP course. Learn to utilize Google Cloud services for computing, storage, machine learning, and data analytics. Gain hands-on experience with tools like Compute Engine, Cloud Storage, and BigQuery. Enroll now to start your cloud journey with GCP!";
  $canonical = "https://urbancode.in/gcp";
  $keywords = "GCP, Google Cloud Platform, Cloud Computing, GCP Course, Compute Engine, Cloud Storage, BigQuery, Machine Learning, Cloud Solutions, Google Cloud Certification";
}

else if($endex[0]=='japanese'){
  $metatitle = "Urbancode Japanese Language Course";
  $metadescription = "Learn Japanese with Urbancode’s immersive language course. Master reading, writing, and speaking skills, including hiragana, katakana, kanji, and conversational Japanese. Enroll now to start your journey to fluency in Japanese!";
  $canonical = "https://urbancode.in/japanese";
  $keywords = "Japanese, Learn Japanese, Japanese Course, Japanese Language, Language Learning, Hiragana, Katakana, Kanji, Japanese Grammar, Japanese Conversation";
}

else if($endex[0]=='creativewriting-blogging'){
  $metatitle = "Urbancode Creative Writing & Blogging Course";
  $metadescription = "Unlock your writing potential with Urbancode’s Creative Writing & Blogging course. Learn to craft compelling stories, articles, and blogs that engage readers and build your online presence. Enroll now to develop your writing skills and start your blogging journey!";
  $canonical = "https://urbancode.in/creativewriting-blogging";
  $keywords = "Creative Writing, Blogging, Writing Course, Creative Writing Course, Blog Writing, Storytelling, Content Creation, Blogging Skills, Writing for the Web";
}

else if($endex[0]=='webinar'){
  $metatitle = "Urbancode Webinar";
  $metadescription = "Join Urbancode’s webinars to learn from industry experts on the latest trends in technology, business, and more. Our live sessions provide interactive discussions, practical insights, and networking opportunities. Enroll now to gain knowledge and stay ahead in your field!";
  $canonical = "https://urbancode.in/webinar";
  $keywords = "Webinar, Online Webinar, Tech Webinar, Industry Experts, Live Sessions, Networking, Professional Development, Online Learning, Educational Webinar";
}

else if($endex[0]=='javascript'){
  $metatitle = "Urbancode JavaScript Course";
  $metadescription = "Learn JavaScript with Urbancode’s in-depth course. Master core programming concepts, object-oriented programming, and dynamic web development techniques. Gain hands-on experience through projects to build interactive websites and web applications. Enroll now to start coding with JavaScript!";
  $canonical = "https://urbancode.in/javascript";
  $keywords = "JavaScript, JavaScript Course, Web Development, JavaScript Programming, Front-End Development, Object-Oriented Programming, Dynamic Web Apps, Coding with JavaScript";
}

else if($endex[0]=='cybersecurity'){
  $metatitle = "Urbancode Cybersecurity Course";
  $metadescription = "Master Cybersecurity with Urbancode’s in-depth course. Learn to protect systems, networks, and data from cyber threats and attacks. Gain hands-on experience with the latest security tools, techniques, and best practices. Enroll now to develop the skills needed to secure digital environments!";
  $canonical = "https://urbancode.in/cybersecurity";
  $keywords = "Cybersecurity, Cybersecurity Course, Network Security, Ethical Hacking, Information Security, Cyber Threats, Data Protection, Security Tools, Digital Security, Cyber Defense";
}

else if($endex[0]=='languages'){
  $metatitle = "Urbancode Languages Course";
  $metadescription = "Learn new languages with Urbancode's interactive and immersive language courses. Whether you're looking to learn Spanish, French, Japanese, or other languages, our courses offer structured lessons, real-world practice, and cultural insights. Enroll now to start your language learning journey!";
  $canonical = "https://urbancode.in/languages";
  $keywords = "Languages Course, Learn Languages, Language Learning, Spanish, French, Japanese, Online Language Course, Language Skills, Cultural Insights, Foreign Languages";
}

else if($endex[0]=='web-development'){
  $metatitle = "Urbancode Web Development Course";
  $metadescription = "Master Web Development with Urbancode’s comprehensive course. Learn how to build dynamic, responsive websites using HTML, CSS, JavaScript, and more. Gain hands-on experience with front-end and back-end development, as well as web design principles. Enroll now to kickstart your web development career!";
  $canonical = "https://urbancode.in/web-development";
  $keywords = "Web Development, Web Development Course, Front-End Development, Back-End Development, HTML, CSS, JavaScript, Responsive Web Design, Full Stack Development, Web Design";
}
else if($endex[0]=='ui-ux-about'){
  $metatitle = "About Urbancode UI/UX Design Course";
  $metadescription = "Discover Urbancode’s UI/UX Design course, where we teach the fundamentals of creating user-friendly interfaces and exceptional user experiences. Learn design principles, wireframing, prototyping, and testing to create seamless digital experiences. Enroll now to enhance your design skills and launch your career in UI/UX!";
  $canonical = "https://urbancode.in/ui-ux-about";
  $keywords = "UI/UX Design, UI/UX Course, User Interface, User Experience, Web Design, Wireframing, Prototyping, UX Testing, Design Principles, Digital Experience";
}
else if($endex[0]=='cloud-devops'){
  $metatitle = "Urbancode Cloud & DevOps Course";
  $metadescription = "Master Cloud Computing and DevOps with Urbancode’s comprehensive course. Learn how to manage cloud infrastructure, automate workflows, and implement continuous integration and continuous deployment (CI/CD) practices. Gain hands-on experience with top cloud platforms and DevOps tools. Enroll now to advance your career in Cloud & DevOps!";
  $canonical = "https://urbancode.in/cloud-devops";
  $keywords = "Cloud Computing, DevOps, Cloud & DevOps Course, CI/CD, Cloud Infrastructure, Automation, DevOps Tools, Continuous Integration, Continuous Deployment, Cloud Management";
}
else if($endex[0]=='data-analytics'){
  $metatitle = "Urbancode Data Analytics Course";
  $metadescription = "Master Data Analytics with Urbancode’s in-depth course. Learn to analyze large datasets, extract valuable insights, and use data visualization tools to make data-driven decisions. Gain hands-on experience with real-world projects and analytics tools like Excel, Python, and SQL. Enroll now to become a skilled data analyst!";
  $canonical = "https://urbancode.in/data-analytics";
  $keywords = "Data Analytics, Data Analytics Course, Data Analysis, Data Visualization, Data Insights, Excel, Python, SQL, Data-Driven Decisions, Analytics Tools";
}

else if($endex[0]=='database'){
  $metatitle = "Urbancode Database Course";
  $metadescription = "Master Database Management with Urbancode’s comprehensive course. Learn how to design, implement, and manage databases using SQL and NoSQL systems. Gain hands-on experience in database normalization, queries, and optimization to efficiently handle large datasets. Enroll now to enhance your database skills and advance your career!";
  $canonical = "https://urbancode.in/database";
  $keywords = "Database, Database Management, SQL, NoSQL, Database Course, Database Design, Data Modeling, Data Queries, Database Optimization, Data Handling";
}
else if($endex[0]=='data-visualization'){
  $metatitle = "Urbancode Data Visualization Course";
  $metadescription = "Master Data Visualization with Urbancode’s hands-on course. Learn how to create insightful visual representations of complex datasets using tools like Tableau, Power BI, and Python libraries. Gain practical experience in transforming data into compelling visual stories to aid decision-making. Enroll now to start visualizing data like a pro!";
  $canonical = "https://urbancode.in/data-visualization";
  $keywords = "Data Visualization, Data Visualization Course, Tableau, Power BI, Data Insights, Data Visualization Tools, Python Visualization, Data Storytelling, Dashboards, Interactive Visualizations";
}
else if($endex[0]=='software-testing'){
  $metatitle = "Urbancode Software Testing Course";
  $metadescription = "Master Software Testing with Urbancode’s detailed course. Learn various testing techniques including manual, automated, and performance testing. Gain hands-on experience with popular testing tools and frameworks to ensure high-quality software development. Enroll now to become a skilled software tester!";
  $canonical = "https://urbancode.in/software-testing";
  $keywords = "Software Testing, Testing Course, Manual Testing, Automated Testing, Performance Testing, QA Testing, Testing Tools, Quality Assurance, Software Quality, Test Automation";
}

else if($endex[0]=='english-proficiency-exams'){
  $metatitle = "Urbancode English Proficiency Exams Preparation Course";
  $metadescription = "Prepare for English proficiency exams like IELTS, TOEFL, and PTE with Urbancode’s comprehensive course. Learn key strategies, improve your reading, writing, listening, and speaking skills, and boost your exam scores. Enroll now to enhance your English proficiency and achieve success in your exams!";
  $canonical = "https://urbancode.in/english-proficiency-exams";
  $keywords = "English Proficiency Exams, IELTS, TOEFL, PTE, English Exam Preparation, English Skills, Exam Strategies, Reading, Writing, Listening, Speaking Skills";
}

else if($endex[0]=='salesforce-demo'){
  $metatitle = "Urbancode Salesforce Demo Class - Start Your CRM Journey";
  $metadescription = "Join Urbancode’s Salesforce Demo Class to explore the world of CRM solutions. Learn Salesforce basics, platform capabilities, workflow automation, and more. Perfect for beginners and professionals aiming to enhance their career prospects. Enroll now and take the first step towards Salesforce expertise!";
  $canonical = "https://urbancode.in/salesforce-demo";
  $keywords = "Salesforce Demo Class, Salesforce Basics, CRM Solutions, Workflow Automation, Platform Capabilities, Salesforce Training, Career Growth, Beginners, Professionals";
}
else if($endex[0]=='crm'){
  $metatitle = "Urbancode CRM Management Course";
  $metadescription = "Master customer relationship management with Urbancode's CRM Management course. Learn effective CRM strategies, tools, and techniques to enhance customer interactions and business growth. Enroll now to take your business skills to the next level!";
  $canonical = "https://urbancode.in/crm";
  $keywords = "CRM Management, Customer Relationship Management, CRM Tools, Business Growth, Customer Interaction, CRM Course, Business Management, CRM Strategies";
}

else if($endex[0]=='data-science-about'){
  $metatitle = "About Urbancode Data Science Course";
  $metadescription = "Discover the world of data science with Urbancode's comprehensive course. Learn machine learning, Python, data visualization, and statistical analysis to solve real-world problems. Join now to start your journey in data science!";
  $canonical = "https://urbancode.in/data-science-about";
  $keywords = "Data Science Course, Machine Learning, Python for Data Science, Data Visualization, Statistical Analysis, Data Science Training, Real-World Problem Solving, Data Science Career";
}
else if($endex[0]=='kids'){
  $metatitle = "Urbancode Kids Learning Program";
  $metadescription = "Ignite your child's creativity and curiosity with Urbancode's Kids Learning Program. Explore fun and engaging activities in coding, art, and science designed to inspire young minds. Enroll now for a world of discovery and learning!";
  $canonical = "https://urbancode.in/kids";
  $keywords = "Kids Learning Program, Coding for Kids, Art for Kids, Science Activities, Fun Learning, Creative Learning, Kids Education, Young Minds Development";
}
else if($endex[0]=='404'){
    $metatitle = "Page Not Found - Urbancode";
    $metadescription = "Oops! The page you are looking for does not exist. It may have been moved, deleted, or the URL might be incorrect. Explore our courses and services.";
    $keywords = "404 Error, Page Not Found, Urbancode Courses";
    $canonical = "https://urbancode.in/404";
}

else if($endex[0]=='about'){
    $metatitle = "About Urbancode - Empowering Careers with Industry-Leading Training";
    $metadescription = "Urbancode is a leading training and placement institute offering expert-led courses in software development, data science, digital marketing, and more. Learn from industry professionals and boost your career.";
    $keywords = "About Urbancode, Training Institute, Career Development, IT Courses, Professional Training";
    $canonical = "https://urbancode.in/about";
}

else if($endex[0]=='be-our-mentor'){
    $metatitle = "Become a Mentor at Urbancode - Share Your Expertise";
    $metadescription = "Join Urbancode as a mentor and inspire the next generation of professionals. Share your expertise, guide learners, and make a meaningful impact in the industry.";
    $keywords = "Be a Mentor, Urbancode Mentorship, Teach at Urbancode, Career Mentorship, Industry Experts";
    $canonical = "https://urbancode.in/be-our-mentor";
}

else if($endex[0]=='certificate-download'){
    $metatitle = "Download Your Certificate - Urbancode";
    $metadescription = "Access and download your Urbancode course completion certificate. Validate your skills and showcase your achievement with an industry-recognized certification.";
    $keywords = "Certificate Download, Urbancode Certification, Course Completion Certificate, Verified Skills";
    $canonical = "https://urbancode.in/certificate-download";
}

else if($endex[0]=='contact-us'){
    $metatitle = "Contact Urbancode - Get in Touch with Us";
    $metadescription = "Have questions? Contact Urbancode for course details, career guidance, and support. Reach us via phone, email, or visit our office for assistance.";
    $keywords = "Contact Urbancode, Get in Touch, Support, Course Enquiries, Training Institute Contact";
    $canonical = "https://urbancode.in/contact-us";
}

else if($endex[0]=='courses'){
    $metatitle = "Explore Courses at Urbancode - Upskill with Industry Experts";
    $metadescription = "Discover a wide range of industry-relevant courses at Urbancode, including programming, data science, digital marketing, and more. Enroll today and boost your career.";
    $keywords = "Urbancode Courses, IT Training, Career Development, Online Courses, Software Development, Digital Marketing, Data Science";
    $canonical = "https://urbancode.in/courses";
}

else if($endex[0]=='disclaimer'){
    $metatitle = "Disclaimer & Legal Information - Urbancode";
    $metadescription = "Read the Urbancode disclaimer outlining the limitations of liability, accuracy of information, and external links. Stay informed about our policies and terms.";
    $keywords = "Urbancode Disclaimer, Terms and Conditions, Legal Disclaimer, Website Policies";
    $canonical = "https://urbancode.in/disclaimer";
}

else if($endex[0]=='jobs'){
    $metatitle = "Explore Job Opportunities at Urbancode - Apply Now";
    $metadescription = "Find exciting job opportunities with Urbancode and top industry partners. Apply now for roles in IT, software development, digital marketing, and more.";
    $keywords = "Urbancode Jobs, Career Opportunities, IT Jobs, Software Development Jobs, Job Openings, Hiring Now";
    $canonical = "https://urbancode.in/jobs";
}

else if($endex[0]=='login'){
    $metatitle = "Login to Urbancode - Access Your Learning Dashboard";
    $metadescription = "Sign in to your Urbancode account to access courses, track progress, and manage your learning journey. Secure and easy login for students and professionals.";
    $keywords = "Urbancode Login, Student Login, Learning Dashboard, Online Course Access, Secure Login";
    $canonical = "https://urbancode.in/login";
}

else if($endex[0]=='privacy-policy'){
    $metatitle = "Privacy Policy - How Urbancode Protects Your Data";
    $metadescription = "Read Urbancode's Privacy Policy to understand how we collect, use, and protect your personal information. Your data privacy and security are our top priorities.";
    $keywords = "Privacy Policy, Urbancode Data Protection, User Privacy, Personal Information Security, Data Usage";
    $canonical = "https://urbancode.in/privacy-policy";
}

else if($endex[0]=='terms-and-conditions'){
    $metatitle = "Terms and Conditions - Urbancode User Agreement";
    $metadescription = "Review Urbancode's Terms and Conditions to understand our policies on course enrollment, payments, refunds, and user responsibilities. Stay informed about our guidelines.";
    $keywords = "Terms and Conditions, Urbancode Policies, User Agreement, Course Enrollment Rules, Refund Policy";
    $canonical = "https://urbancode.in/terms-and-conditions";
}

else if($endex[0]=='advanced-python'){
    $metatitle = "Master Advanced Python - Expert-Led Course at Urbancode";
    $metadescription = "Enhance your Python skills with Urbancode’s Advanced Python course. Learn OOP, multithreading, database integration, and real-world applications from industry experts.";
    $keywords = "Advanced Python, Python Programming, OOP in Python, Python Multithreading, Python Course, Expert Python Training";
    $canonical = "https://urbancode.in/advanced-python";
}

else if($endex[0]=='ai-ml'){
    $metatitle = "AI & Machine Learning Course - Learn from Industry Experts";
    $metadescription = "Master Artificial Intelligence and Machine Learning with Urbancode. Learn deep learning, neural networks, data science, and real-world AI applications from experts.";
    $keywords = "AI Course, Machine Learning, Deep Learning, Neural Networks, Data Science, AI Certification, AI Training";
    $canonical = "https://urbancode.in/ai-ml";
}

else if($endex[0]=='alteryx'){
    $metatitle = "Alteryx Training Course - Master Data Analytics & Automation";
    $metadescription = "Learn Alteryx with Urbancode’s expert-led training. Master data blending, analytics, automation, and workflow optimization for real-world applications. Enroll now.";
    $keywords = "Alteryx Course, Data Analytics, Alteryx Training, Data Blending, Workflow Automation, Data Science";
    $canonical = "https://urbancode.in/alteryx";
}

else if($endex[0]=='angular-fullstack'){
    $metatitle = "Angular Full Stack Development Course - Build Scalable Web Apps";
    $metadescription = "Master Angular Full Stack Development with Urbancode. Learn frontend and backend development, API integration, and deployment. Build real-world web applications with expert guidance.";
    $keywords = "Angular Full Stack, Full Stack Development, Angular Training, MEAN Stack, Web Development, API Integration";
    $canonical = "https://urbancode.in/angular-fullstack";
}

else if($endex[0]=='appinventor-kids'){
    $metatitle = "App Inventor Course for Kids - Learn App Development Easily";
    $metadescription = "Introduce kids to app development with Urbancode’s App Inventor course. Learn to build fun, interactive mobile apps using a visual programming approach. Perfect for young learners!";
    $keywords = "App Inventor for Kids, Kids Coding, Mobile App Development, Visual Programming, Coding for Kids, App Development Course";
    $canonical = "https://urbancode.in/appinventor-kids";
}

else if($endex[0]=='aws'){
    $metatitle = "AWS Training & Certification - Master Cloud Computing with Urbancode";
    $metadescription = "Learn AWS cloud computing with Urbancode’s expert-led training. Gain hands-on experience in AWS services, cloud security, and architecture. Enroll now for certification preparation.";
    $keywords = "AWS Training, Cloud Computing, AWS Certification, AWS Course, Cloud Security, AWS Architecture, DevOps";
    $canonical = "https://urbancode.in/aws";
}

else if($endex[0]=='azure'){
    $metatitle = "Microsoft Azure Training & Certification - Master Cloud Computing";
    $metadescription = "Learn Microsoft Azure cloud computing with Urbancode’s expert-led training. Gain hands-on experience in Azure services, cloud security, and architecture. Enroll now for certification preparation.";
    $keywords = "Azure Training, Microsoft Azure, Cloud Computing, Azure Certification, Azure Course, Cloud Security, Azure DevOps";
    $canonical = "https://urbancode.in/azure";
}

else if($endex[0]=='book-reading-club-kids'){
    $metatitle = "Book Reading Club for Kids - Enhance Reading & Creativity";
    $metadescription = "Join Urbancode’s Book Reading Club for Kids and develop a love for reading. Engage in fun storytelling, interactive discussions, and creative activities to boost literacy and imagination.";
    $keywords = "Book Reading Club, Kids Reading Program, Storytelling for Kids, Children's Book Club, Literacy Development, Reading Activities";
    $canonical = "https://urbancode.in/book-reading-club-kids";
}

else if($endex[0]=='cyber-security'){
    $metatitle = "Cyber Security Course - Learn Ethical Hacking & Data Protection";
    $metadescription = "Master Cyber Security with Urbancode’s expert-led training. Learn ethical hacking, network security, penetration testing, and data protection. Get certified and advance your career.";
    $keywords = "Cyber Security Course, Ethical Hacking, Network Security, Penetration Testing, Data Protection, Cyber Security Training, Information Security";
    $canonical = "https://urbancode.in/cyber-security";
}

else if($endex[0]=='data-analysis'){
    $metatitle = "Data Analysis Course - Master Data Analytics & Visualization";
    $metadescription = "Learn data analysis with Urbancode’s expert-led training. Gain hands-on experience in data visualization, statistical analysis, and business intelligence tools. Enroll now and boost your career.";
    $keywords = "Data Analysis Course, Data Analytics, Business Intelligence, Data Visualization, Statistical Analysis, Data Science Training";
    $canonical = "https://urbancode.in/data-analysis";
}

else if($endex[0]=='data-science'){
    $metatitle = "Data Science Course - Master AI, ML & Big Data Analytics";
    $metadescription = "Become a data expert with Urbancode’s Data Science course. Learn machine learning, AI, data visualization, big data analytics, and Python programming. Enroll now for hands-on training.";
    $keywords = "Data Science Course, Machine Learning, AI Training, Big Data Analytics, Data Visualization, Python for Data Science, Data Science Certification";
    $canonical = "https://urbancode.in/data-science";
}

else if($endex[0]=='ethical-hacking'){
    $metatitle = "Ethical Hacking Course - Learn Cybersecurity Skills";
    $metadescription = "Master ethical hacking with Urbancode’s expert-led course. Learn penetration testing, network security, and cyber defense techniques. Get certified and advance your career.";
    $keywords = "Ethical Hacking, Cybersecurity Course, Penetration Testing, Network Security, Ethical Hacking Training, Cyber Defense";
    $canonical = "https://urbancode.in/ethical-hacking";
}

else if($endex[0]=='figma'){
    $metatitle = "Figma UI/UX Design Course - Master Prototyping & Wireframing";
    $metadescription = "Learn Figma for UI/UX design with Urbancode’s expert-led training. Master prototyping, wireframing, and collaborative design to create stunning user experiences.";
    $keywords = "Figma Course, UI/UX Design, Figma Training, Prototyping, Wireframing, User Experience, Figma Certification";
    $canonical = "https://urbancode.in/figma";
}

else if($endex[0]=='full-stack'){
    $metatitle = "Full Stack Development Course - Master Web Technologies";
    $metadescription = "Become a Full Stack Developer with Urbancode’s expert-led training. Learn front-end, back-end, databases, and deployment using modern technologies. Enroll now!";
    $keywords = "Full Stack Development, Web Development, Full Stack Course, Frontend, Backend, Database, MERN, MEAN, Software Development";
    $canonical = "https://urbancode.in/full-stack";
}

else if($endex[0]=='graphics-design'){
    $metatitle = "Graphic Design Course - Master Creative Designing Skills";
    $metadescription = "Learn graphic design with Urbancode’s expert-led course. Master Photoshop, Illustrator, branding, UI/UX, and digital creativity. Enroll now and boost your design career!";
    $keywords = "Graphic Design Course, Photoshop, Illustrator, UI/UX Design, Digital Art, Branding, Creative Designing, Design Certification";
    $canonical = "https://urbancode.in/graphics-design";
}

else if($endex[0]=='html-css'){
    $metatitle = "HTML & CSS Course - Master Web Development Basics";
    $metadescription = "Learn HTML & CSS with Urbancode’s expert-led course. Master responsive web design, styling, layouts, and modern front-end techniques. Enroll now and start coding today!";
    $keywords = "HTML Course, CSS Course, Web Development, Frontend Design, Responsive Web Design, UI Development, Web Design Course";
    $canonical = "https://urbancode.in/html-css";
}

else if($endex[0]=='html'){
    $metatitle = "HTML Course - Learn Web Development from Scratch";
    $metadescription = "Master HTML with Urbancode’s expert-led course. Learn the fundamentals of web development, semantic HTML, forms, and structure. Start building websites today!";
    $keywords = "HTML Course, Learn HTML, Web Development, Frontend Development, Website Building, HTML Basics, Web Design";
    $canonical = "https://urbancode.in/html";
}

else if($endex[0]=='java'){
    $metatitle = "Java Programming Course - Master Core & Advanced Java";
    $metadescription = "Learn Java programming with Urbancode’s expert-led course. Master Core Java, OOP, multithreading, JDBC, and real-world application development. Enroll now!";
    $keywords = "Java Course, Learn Java, Core Java, Advanced Java, Java Programming, OOP in Java, Java Development, Java Certification";
    $canonical = "https://urbancode.in/java";
}

else if($endex[0]=='korean'){
    $metatitle = "Korean Language Course - Learn to Speak, Read & Write";
    $metadescription = "Learn Korean with Urbancode’s expert-led course. Master speaking, reading, writing, and grammar for beginners to advanced levels. Enroll now and start your language journey!";
    $keywords = "Korean Language Course, Learn Korean, Speak Korean, Korean for Beginners, Korean Grammar, Korean Writing, Korean Certification";
    $canonical = "https://urbancode.in/korean";
}

else if($endex[0]=='linux'){
    $metatitle = "Linux Course - Master System Administration & Security";
    $metadescription = "Learn Linux with Urbancode’s expert-led course. Master system administration, shell scripting, security, and server management. Enroll now and enhance your IT skills!";
    $keywords = "Linux Course, Learn Linux, Linux Administration, Shell Scripting, Linux Security, Server Management, Linux Certification";
    $canonical = "https://urbancode.in/linux";
}

else if($endex[0]=='malayalam'){
    $metatitle = "Malayalam Language Course - Learn to Speak & Write Fluently";
    $metadescription = "Learn Malayalam with Urbancode’s expert-led course. Master speaking, reading, writing, and grammar for beginners to advanced levels. Enroll now and start your language journey!";
    $keywords = "Malayalam Language Course, Learn Malayalam, Speak Malayalam, Malayalam for Beginners, Malayalam Grammar, Malayalam Writing, Language Certification";
    $canonical = "https://urbancode.in/malayalam";
}

else if($endex[0]=='mern'){
    $metatitle = "MERN Stack Development Course - Build Full-Stack Web Apps";
    $metadescription = "Learn MERN Stack development with Urbancode’s expert-led course. Master MongoDB, Express.js, React, and Node.js to build scalable full-stack applications. Enroll now!";
    $keywords = "MERN Stack Course, Full Stack Development, MongoDB, Express.js, React, Node.js, Web Development, JavaScript";
    $canonical = "https://urbancode.in/mern";
}

else if($endex[0]=='ms-office'){
    $metatitle = "MS Office Training Course - Master Word, Excel & PowerPoint";
    $metadescription = "Learn Microsoft Office with Urbancode’s expert-led course. Master Word, Excel, PowerPoint, and Outlook for business and productivity. Enroll now and boost your skills!";
    $keywords = "MS Office Course, Learn Microsoft Office, Excel Training, Word Training, PowerPoint Skills, Office Productivity, MS Office Certification";
    $canonical = "https://urbancode.in/ms-office";
}

else if($endex[0]=='ms-sql'){
    $metatitle = "MS SQL Server Course - Master Database Management & Queries";
    $metadescription = "Learn MS SQL Server with Urbancode’s expert-led course. Master database design, SQL queries, stored procedures, and performance tuning. Enroll now and boost your career!";
    $keywords = "MS SQL Course, Learn SQL, SQL Server Training, Database Management, SQL Queries, Stored Procedures, MS SQL Certification";
    $canonical = "https://urbancode.in/ms-sql";
}

else if($endex[0]=='mysql'){
    $metatitle = "MySQL Database Course - Master SQL Queries & Management";
    $metadescription = "Learn MySQL with Urbancode’s expert-led course. Master database design, SQL queries, indexing, and optimization for scalable applications. Enroll now and enhance your skills!";
    $keywords = "MySQL Course, Learn MySQL, SQL Queries, Database Management, MySQL Training, Data Optimization, MySQL Certification";
    $canonical = "https://urbancode.in/mysql";
}

else if($endex[0]=='oet'){
    $metatitle = "OET Preparation Course - Ace the Occupational English Test";
    $metadescription = "Prepare for the OET exam with Urbancode’s expert-led course. Improve your English proficiency for healthcare professions with personalized training. Enroll now!";
    $keywords = "OET Course, OET Preparation, Occupational English Test, OET Training, Healthcare English, Medical English, OET Certification";
    $canonical = "https://urbancode.in/oet";
}

else if($endex[0]=='photoshop'){
    $metatitle = "Adobe Photoshop Course - Master Image Editing & Design";
    $metadescription = "Learn Adobe Photoshop with Urbancode’s expert-led course. Master image editing, graphic design, photo retouching, and creative effects. Enroll now to enhance your skills!";
    $keywords = "Photoshop Course, Adobe Photoshop Training, Graphic Design, Image Editing, Photo Retouching, Creative Design, Photoshop Certification";
    $canonical = "https://urbancode.in/photoshop";
}

else if($endex[0]=='postgresql'){
    $metatitle = "PostgreSQL Course - Master Database Management & SQL Queries";
    $metadescription = "Learn PostgreSQL with Urbancode’s expert-led course. Master database design, advanced SQL queries, indexing, optimization, and performance tuning. Enroll now!";
    $keywords = "PostgreSQL Course, Learn PostgreSQL, SQL Queries, Database Management, PostgreSQL Training, Data Optimization, SQL Certification";
    $canonical = "https://urbancode.in/postgresql";
}

else if($endex[0]=='power-apps'){
    $metatitle = "Power Apps Course - Build No-Code & Low-Code Applications";
    $metadescription = "Learn Microsoft Power Apps with Urbancode’s expert-led course. Master app development, automation, and integration to build business solutions without coding. Enroll now!";
    $keywords = "Power Apps Course, Microsoft Power Apps, No-Code Development, Low-Code Development, Business Automation, App Development, Power Platform";
    $canonical = "https://urbancode.in/power-apps";
}

else if($endex[0]=='power-bi'){
    $metatitle = "Power BI Course - Master Data Visualization & Analytics";
    $metadescription = "Learn Microsoft Power BI with Urbancode’s expert-led course. Master data visualization, dashboards, DAX functions, and business intelligence. Enroll now and boost your career!";
    $keywords = "Power BI Course, Learn Power BI, Data Visualization, Business Intelligence, Power BI Training, DAX Functions, Data Analytics";
    $canonical = "https://urbancode.in/power-bi";
}

else if($endex[0]=='pyspark'){
    $metatitle = "PySpark Course - Master Big Data Processing & Analytics";
    $metadescription = "Learn PySpark with Urbancode’s expert-led course. Master big data processing, distributed computing, dataframes, and machine learning with Apache Spark. Enroll now!";
    $keywords = "PySpark Course, Learn PySpark, Big Data Processing, Apache Spark, Distributed Computing, Data Analytics, Machine Learning";
    $canonical = "https://urbancode.in/pyspark";
}

else if($endex[0]=='python-plus-chat-gpt'){
    $metatitle = "Python + ChatGPT Course - Build AI-Powered Applications";
    $metadescription = "Learn Python with ChatGPT integration in Urbancode’s expert-led course. Master AI, NLP, automation, and chatbot development using OpenAI's API. Enroll now!";
    $keywords = "Python with ChatGPT, AI Development, NLP, Chatbot Development, OpenAI API, Python Automation, Machine Learning";
    $canonical = "https://urbancode.in/python-plus-chat-gpt";
}

else if($endex[0]=='python'){
    $metatitle = "Python Programming Course - Learn from Basics to Advanced";
    $metadescription = "Master Python programming with Urbancode’s expert-led course. Learn data structures, OOP, automation, web development, and data science. Enroll now to boost your career!";
    $keywords = "Python Course, Learn Python, Python Programming, Data Science, Web Development, Python Automation, Python Certification";
    $canonical = "https://urbancode.in/python";
}

else if($endex[0]=='r-program'){
    $metatitle = "R Programming Course - Master Data Analysis & Visualization";
    $metadescription = "Learn R programming with Urbancode’s expert-led course. Master data analysis, statistical computing, machine learning, and visualization techniques. Enroll now!";
    $keywords = "R Programming Course, Learn R, Data Analysis, Statistical Computing, R for Data Science, Machine Learning, R Certification";
    $canonical = "https://urbancode.in/r-program";
}

else if($endex[0]=='react-native'){
    $metatitle = "React Native Course - Build Cross-Platform Mobile Apps";
    $metadescription = "Learn React Native with Urbancode’s expert-led course. Master cross-platform mobile app development, UI components, APIs, and deployment. Enroll now and start building apps!";
    $keywords = "React Native Course, Learn React Native, Mobile App Development, Cross-Platform Apps, JavaScript, React Native Training, UI Components";
    $canonical = "https://urbancode.in/react-native";
}

else if($endex[0]=='rpa'){
    $metatitle = "RPA Course - Master Robotic Process Automation Skills";
    $metadescription = "Learn RPA with Urbancode’s expert-led course. Master automation tools like UiPath, Blue Prism, and Automation Anywhere to streamline business processes. Enroll now!";
    $keywords = "RPA Course, Learn RPA, Robotic Process Automation, UiPath Training, Blue Prism, Automation Anywhere, Business Automation";
    $canonical = "https://urbancode.in/rpa";
}

else if($endex[0]=='salesforce-administrator'){
    $metatitle = "Salesforce Admin Course - Master CRM & Cloud Management";
    $metadescription = "Learn Salesforce Administration with Urbancode’s expert-led course. Master CRM, cloud management, automation, and workflows. Enroll now and boost your Salesforce skills!";
    $keywords = "Salesforce Admin Course, Learn Salesforce, CRM Training, Cloud Management, Salesforce Certification, Workflow Automation, Salesforce Administration";
    $canonical = "https://urbancode.in/salesforce-administrator";
}

else if($endex[0]=='salesforce-developer'){
    $metatitle = "Salesforce Developer Course - Master Apex & Lightning Apps";
    $metadescription = "Learn Salesforce Development with Urbancode’s expert-led course. Master Apex programming, Lightning components, integrations, and automation. Enroll now and advance your career!";
    $keywords = "Salesforce Developer Course, Learn Salesforce, Apex Programming, Lightning Components, Salesforce Certification, CRM Development, Salesforce Automation";
    $canonical = "https://urbancode.in/salesforce-developer";
}

else if($endex[0]=='sas'){
    $metatitle = "SAS Course - Master Data Analytics & Statistical Modeling";
    $metadescription = "Learn SAS with Urbancode’s expert-led course. Master data analytics, statistical modeling, and business intelligence to enhance decision-making. Enroll now!";
    $keywords = "SAS Course, Learn SAS, Data Analytics, Statistical Modeling, Business Intelligence, SAS Certification, Data Science";
    $canonical = "https://urbancode.in/sas";
}

else if($endex[0]=='scratch-kids'){
    $metatitle = "Scratch Programming for Kids - Learn Coding with Fun";
    $metadescription = "Introduce your child to coding with Urbancode’s Scratch course. Learn block-based programming, game development, and creative problem-solving in a fun way. Enroll now!";
    $keywords = "Scratch for Kids, Kids Coding, Learn Scratch, Game Development, Block-Based Coding, Coding for Children, STEM Learning";
    $canonical = "https://urbancode.in/scratch-kids";
}

else if($endex[0]=='selenium-python'){
    $metatitle = "Selenium with Python Course - Master Web Automation Testing";
    $metadescription = "Learn Selenium with Python in Urbancode’s expert-led course. Master web automation, testing frameworks, and real-world automation projects. Enroll now and boost your career!";
    $keywords = "Selenium with Python, Automation Testing, Web Testing, Python Selenium Course, Selenium WebDriver, QA Testing, Test Automation";
    $canonical = "https://urbancode.in/selenium-python";
}

else if($endex[0]=='spanish'){
    $metatitle = "Spanish Language Course - Learn to Speak & Write Fluently";
    $metadescription = "Learn Spanish with Urbancode’s expert-led course. Master speaking, reading, writing, and grammar for beginners to advanced levels. Enroll now and start your language journey!";
    $keywords = "Spanish Language Course, Learn Spanish, Speak Spanish, Spanish for Beginners, Spanish Grammar, Spanish Writing, Language Certification";
    $canonical = "https://urbancode.in/spanish";
}

else if($endex[0]=='tableau'){
    $metatitle = "Tableau Course - Master Data Visualization & Analytics";
    $metadescription = "Learn Tableau with Urbancode’s expert-led course. Master data visualization, dashboards, and business intelligence for data-driven decision-making. Enroll now!";
    $keywords = "Tableau Course, Learn Tableau, Data Visualization, Business Intelligence, Tableau Training, Data Analytics, Dashboard Design";
    $canonical = "https://urbancode.in/tableau";
}

else if($endex[0]=='ui-path'){
    $metatitle = "UiPath RPA Course - Master Robotic Process Automation";
    $metadescription = "Learn UiPath with Urbancode’s expert-led course. Master robotic process automation (RPA), workflow automation, and AI-driven bots for business efficiency. Enroll now!";
    $keywords = "UiPath Course, Learn UiPath, RPA Training, Robotic Process Automation, Workflow Automation, UiPath Certification, Business Automation";
    $canonical = "https://urbancode.in/ui-path";
}

else if($endex[0]=='webdesign-kids'){
    $metatitle = "Web Design Course for Kids - Learn to Build Websites";
    $metadescription = "Introduce kids to web design with Urbancode’s expert-led course. Learn HTML, CSS, and website creation in a fun, interactive way. Enroll now and start coding today!";
    $keywords = "Web Design for Kids, Kids Coding, Learn Web Development, HTML CSS for Kids, Website Building, STEM Learning, Web Design Course";
    $canonical = "https://urbancode.in/webdesign-kids";
}

else if($endex[0]=='communication-skill-development'){
    $metatitle = "Communication Skills Course - Master Public Speaking & Confidence";
    $metadescription = "Enhance your communication skills with Urbancode’s expert-led course. Master public speaking, confidence building, and professional communication. Enroll now!";
    $keywords = "Communication Skills Course, Public Speaking, Soft Skills Training, Professional Communication, Confidence Building, Leadership Skills";
    $canonical = "https://urbancode.in/communication-skill-development";
}

else if($endex[0]=='bootcamp'){
    $metatitle = "Intensive Bootcamp Course - Fast-Track Your Learning Journey";
    $metadescription = "Join Urbancode’s expert-led Bootcamp to master in-demand skills quickly. Learn coding, data science, AI, and more with hands-on training. Enroll now and accelerate your career!";
    $keywords = "Bootcamp Course, Intensive Training, Fast-Track Learning, Coding Bootcamp, Data Science Bootcamp, AI Training, Career Acceleration";
    $canonical = "https://urbancode.in/bootcamp";
}

else if($endex[0]=='digital-marketing-workshop'){
    $metatitle = "Digital Marketing Workshop - Learn SEO, Ads & Social Media";
    $metadescription = "Join Urbancode’s Digital Marketing Workshop to master SEO, social media marketing, PPC ads, and content marketing. Gain hands-on experience and boost your career!";
    $keywords = "Digital Marketing Workshop, SEO Training, Social Media Marketing, PPC Advertising, Content Marketing, Digital Marketing Course";
    $canonical = "https://urbancode.in/digital-marketing-workshop";
}

else if($endex[0]=='events'){
    $metatitle = "Upcoming Events & Workshops - Join Urbancode’s Learning Sessions";
    $metadescription = "Explore Urbancode’s upcoming events, workshops, and webinars. Learn new skills, network with experts, and stay ahead in your career. Register now!";
    $keywords = "Urbancode Events, Workshops, Webinars, Training Sessions, Career Development, Professional Networking, Skill Building";
    $canonical = "https://urbancode.in/events";
}

else if($endex[0]=='german-workshop'){
    $metatitle = "German Language Workshop - Learn to Speak & Write Fluently";
    $metadescription = "Join Urbancode’s German Language Workshop and learn to speak, read, and write fluently. Master grammar, vocabulary, and pronunciation with expert guidance. Enroll now!";
    $keywords = "German Workshop, Learn German, German Language Course, German for Beginners, German Grammar, Speak German, Language Learning";
    $canonical = "https://urbancode.in/german-workshop";
}

else if($endex[0]=='graphic-design-democlass'){
    $metatitle = "Graphic Design Demo Class - Learn Creativity & Visual Design";
    $metadescription = "Join Urbancode’s free Graphic Design Demo Class. Learn Photoshop, Illustrator, branding, and UI/UX design. Get hands-on experience and start your creative journey!";
    $keywords = "Graphic Design Demo, Learn Graphic Design, Photoshop, Illustrator, UI/UX Design, Branding, Free Design Class";
    $canonical = "https://urbancode.in/graphic-design-democlass";
}

else if($endex[0]=='html-css-bootcamp'){
    $metatitle = "HTML & CSS Bootcamp - Master Web Development Basics Fast";
    $metadescription = "Join Urbancode’s HTML & CSS Bootcamp and master the fundamentals of web design. Learn responsive design, layouts, and styling techniques. Enroll now and start coding today!";
    $keywords = "HTML & CSS Bootcamp, Learn Web Development, Responsive Design, Frontend Development, Website Design, Web Design Course";
    $canonical = "https://urbancode.in/html-css-bootcamp";
}

else if($endex[0]=='professional-exams'){
    $metatitle = "Professional Exams Prep - Ace Your Certification & Career Goals";
    $metadescription = "Prepare for top professional exams with Urbancode’s expert-led courses. Get training for IT, business, and language certification exams. Enroll now and boost your career!";
    $keywords = "Professional Exams, Certification Preparation, IT Exams, Business Certification, Exam Coaching, Test Preparation, Career Advancement";
    $canonical = "https://urbancode.in/professional-exams";
}

else if($endex[0]=='salesforce-demo'){
    $metatitle = "Salesforce Demo Class - Learn CRM & Cloud Solutions";
    $metadescription = "Join Urbancode’s free Salesforce Demo Class and learn CRM, automation, and cloud solutions. Get hands-on experience with real-world applications. Enroll now!";
    $keywords = "Salesforce Demo Class, Learn Salesforce, CRM Training, Cloud Solutions, Salesforce Automation, Free Salesforce Class";
    $canonical = "https://urbancode.in/salesforce-demo";
}

else if($endex[0]=='toefl-workshop'){
    $metatitle = "TOEFL Workshop - Ace Your English Proficiency Test";
    $metadescription = "Join Urbancode’s TOEFL Workshop and improve your English skills. Get expert guidance on reading, writing, listening, and speaking to score high on your exam. Enroll now!";
    $keywords = "TOEFL Workshop, Learn TOEFL, English Proficiency Test, TOEFL Preparation, TOEFL Training, Exam Coaching, Test Strategies";
    $canonical = "https://urbancode.in/toefl-workshop";
}

else if($endex[0]=='ui-ux-workshop'){
    $metatitle = "UI/UX Design Workshop - Learn Wireframing & Prototyping";
    $metadescription = "Join Urbancode’s UI/UX Workshop to master user interface and experience design. Learn wireframing, prototyping, and usability principles. Enroll now to enhance your design skills!";
    $keywords = "UI/UX Workshop, Learn UI Design, UX Design Training, Wireframing, Prototyping, Usability Testing, User Experience Course";
    $canonical = "https://urbancode.in/ui-ux-workshop";
}

else if($endex[0]=='workshop'){
    $metatitle = "Workshops & Training - Learn New Skills with Experts";
    $metadescription = "Join Urbancode’s expert-led workshops to learn in-demand skills in technology, design, business, and more. Get hands-on experience and boost your career. Enroll now!";
    $keywords = "Workshops, Training Programs, Skill Development, Professional Workshops, Hands-on Learning, Career Growth, Industry Experts";
    $canonical = "https://urbancode.in/workshop";
}

else if($endex[0]=='app-development'){
    $metatitle = "App Development Course - Build Android & iOS Applications";
    $metadescription = "Learn mobile app development with Urbancode’s expert-led course. Master Android, iOS, React Native, and Flutter to create powerful apps. Enroll now and start coding!";
    $keywords = "App Development Course, Mobile App Development, Android Development, iOS Development, React Native, Flutter, App Design";
    $canonical = "https://urbancode.in/app-development";
}

else if($endex[0]=='programming-languages'){
    $metatitle = "Programming Languages Course - Learn Coding from Scratch";
    $metadescription = "Master top programming languages with Urbancode’s expert-led courses. Learn Python, Java, JavaScript, C++, and more for software development. Enroll now!";
    $keywords = "Programming Languages, Learn Coding, Python, Java, JavaScript, C++, Web Development, Software Development";
    $canonical = "https://urbancode.in/programming-languages";
}

else if($endex[0]=='python-kids'){
    $metatitle = "Python for Kids Course - Fun & Easy Coding for Young Learners";
    $metadescription = "Introduce kids to coding with Urbancode’s Python course. Learn basic programming, logic building, and game development in a fun and interactive way. Enroll now!";
    $keywords = "Python for Kids, Kids Coding, Learn Python, Programming for Kids, Game Development, STEM Learning, Coding Classes for Kids";
    $canonical = "https://urbancode.in/python-kids";
}

else if($endex[0]=='seo'){
    $metatitle = "SEO Course - Master Search Engine Optimization & Ranking";
    $metadescription = "Learn SEO with Urbancode’s expert-led course. Master keyword research, on-page & off-page SEO, technical SEO, and Google ranking strategies. Enroll now!";
    $keywords = "SEO Course, Learn SEO, Search Engine Optimization, Keyword Research, On-Page SEO, Off-Page SEO, SEO Training, Google Ranking";
    $canonical = "https://urbancode.in/seo";
}

    ?>
    <title><?php echo $metatitle; ?></title>
    <meta name="description" content="<?php echo $metadescription; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">
    <link rel="canonical" href="<?php echo $canonical; ?>" />

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<!-- Slick JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Glightbox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

  <script defer
          src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"
          crossorigin></script>
  <script defer>
    document.addEventListener('DOMContentLoaded', () => new PureCounter());
  </script>
  <!-- ✅ Preconnect to CDN first -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

  <!-- ✅ Preload Swiper JS early -->
  <link rel="preload"
        as="script"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"
        crossorigin>

     <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


<link rel="preconnect" href="https://www.youtube.com">
<link rel="preconnect" href="https://i.ytimg.com">
<link rel="preconnect" href="https://www.google.com">
<link rel="dns-prefetch" href="//www.youtube.com">
<link rel="dns-prefetch" href="//i.ytimg.com">
<link rel="dns-prefetch" href="//www.google.com">
   

    
    <!-- Google Search console-->

    <meta name="google-site-verification" content="WEXErXa5JBg5hZPCEKFY_g1UVf9R3AxHCZYgQWjQspY" />

    <script>
  fbq('track', 'SubmitApplication');
</script>


<!-- Brevo Conversations {literal} -->
<script>
    (function(d, w, c) {
        w.BrevoConversationsID = '66e481dc0eb0e61938008f86';
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        var s = d.createElement('script');
        s.async = true;
        s.src = 'https://conversations-widget.brevo.com/brevo-conversations.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'BrevoConversations');
</script>
<!-- /Brevo Conversations {/literal} -->


    
<style> 

/*--------------------------------------------------------------
# Global Header
--------------------------------------------------------------*/
.header {
  color: #212529;
  background-color: white;
  padding: 10px 0;
  transition: all 0.5s;
  z-index: 997;
  position: sticky;
}

.header .logo {
  line-height: 1;
}

.header .logo img {
  max-height: 50px;
  margin-right: 8px;
}

.header .logo h1 {
  font-size: 30px;
  margin: 0;
  font-weight: 700;
  color: #37373f;
  f
}

.header .logo span {
  color: #01af6a;
  font-size: 36px;
}

.header .btn-getstarted,
.header .btn-getstarted:focus {
  color: #ffffff;
  background:  #01af6a;
  font-size: 14px;
  padding: 8px 26px;
  margin: 0;
  border-radius: 50px;
  transition: 0.3s;
  text-decoration: none;
  font-weight: bold;
}

.header .btn-getstarted:hover,
.header .btn-getstarted:focus:hover {
  color: #ffffff;
  background: color-mix(in srgb,  #01af6a, transparent 15%);
}

@media (max-width: 1200px) {
  .navmenu ul{
  max-height: 360px !important;
}
  .header .logo {
    order: 1;
  }

  .header .btn-getstarted {
    order: 2;
    margin: 0 15px 0 0;
    padding: 6px 20px;
  }

  .header .navmenu {
    order: 3;
  }
}

.scrolled .header {
  box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
@media (min-width: 1200px) {
  .navmenu {
    padding: 0;
  }

  .navmenu ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }

  .navmenu li {
    position: relative;
  }

  .navmenu>ul>li {
    white-space: nowrap;
    padding: 15px 14px;
  }

  .navmenu>ul>li:last-child {
    padding-right: 0;
  }

  .navmenu ul a,
  .navmenu ul a:focus {
    color: #7f7f90;
    font-size: 15px;
    padding: 0 2px;
    /* font-family:"Matter", sans-serif; */
    font-weight: 545;
    display: flex;
    align-items: center;
    justify-content: space-between;
    white-space: nowrap;
    transition: 0.3s;
    position: relative;
    text-decoration: none;
  }

  .navmenu ul a i,
  .navmenu ul a:focus i {
    font-size: 15px;
    line-height: 0;
    margin-left: 5px;
    transition: 0.3s;
  }

  .navmenu>ul>li>a:before {
    content: "";
    position: absolute;
    height: 2px;
    bottom: -6px;
    left: 0;
    background-color: #01af6a;
    visibility: hidden;
    width: 0px;
    transition: all 0.3s ease-in-out 0s;
  }

  .navmenu a:hover:before,
  .navmenu li:hover>a:before,
  .navmenu .active:before {
    visibility: visible;
    width: 100%;
  }

  .navmenu li:hover>a,
  .navmenu .active,
  .navmenu .active:focus {
    color: color-mix(in srgb, #7f7f90 80%, black 50%);
  }

  .navmenu .dropdown ul {
    margin: 0;
    padding: 10px 0;
    background: #ffffff;
    display: block;
    position: absolute;
    visibility: hidden;
    left: 14px;
    top: 100%; /* Adjusted to align with the parent */
    opacity: 0;
    transition: opacity 0.3s ease, visibility 0.3s ease, top 0.3s ease;
    border-radius: 4px;
    z-index: 99;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
}

.navmenu .dropdown ul li {
    min-width: 200px;
}

.navmenu .dropdown ul a {
    padding: 10px 20px;
    font-size: 15px;
    text-transform: none;
    color: #7f7f90;
    text-decoration: none;
    display: block;
}

.navmenu .dropdown ul a i {
    font-size: 12px;
}

.navmenu .dropdown ul a:hover,
.navmenu .dropdown ul .active:hover,
.navmenu .dropdown ul li:hover > a {
    color: #01af6a;
}

.navmenu .dropdown:hover > ul {
    opacity: 1;
    top: 100%; /* Ensures the dropdown menu appears just below the parent */
    visibility: visible;
}

.navmenu .dropdown .dropdown ul {
    top: 0;
    left: -90%;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease, left 0.3s ease;
}

.navmenu .dropdown .dropdown:hover > ul {
    opacity: 1;
    left: -85%; /* Adjusts the position for submenus to appear aligned */
    visibility: visible;
}

.navmenu .up-dropdown:hover > ul,
.navmenu .up-dropdown:focus-within > ul {
  bottom:100%;
  top :auto;
}

}

/* Mobile Navigation */
@media (max-width: 1199px) {

  .mobile-nav-toggle {
    color: #000; 
    font-size: 30px;
    font-weight: bolder;  
    line-height: 0;
    margin-right: 10px;
    cursor: pointer;
    transition: color 0.3s;
  }


  .navmenu {
    padding: 0;
    z-index: 9997;
  }

  .navmenu ul {
    display: none;
    position: absolute;
    inset: 60px 20px 20px 20px;
    padding: 10px 0;
    margin: 0;
    border-radius: 6px;
    background-color: #ffffff; /* Background color */
    border: 1px solid rgba(33, 37, 41, 0.1); /* Border color */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Shadow effect */
    overflow-y: auto;
    transition: 0.3s;
    z-index: 9998;
  }

  .navmenu a,
  .navmenu a:focus {
    color: #01af6a; 
    padding: 10px 20px;
    /* font-family: "Poppins", sans-serif;  */
    font-size: 17px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    white-space: nowrap;
    text-decoration: none; 
    transition: 0.3s;
  }

  .navmenu a i,
  .navmenu a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: 0.3s;
    background-color: rgba(1, 175, 106, 0.1); 
  }

  .navmenu a i:hover,
  .navmenu a:focus i:hover {
    background-color: #01af6a; 
    color: #ffffff; 
  }

  .navmenu a:hover,
  .navmenu .active,
  .navmenu .active:focus {
    color: #01af6a; 
  }

  .navmenu .active i,
  .navmenu .active:focus i {
    background-color: #01af6a; 
    color: #ffffff; 
    transform: rotate(180deg);
  }

  .navmenu .dropdown ul {
    position: static;
    display: none;
    z-index: 99;
    padding: 10px 0;
    margin: 10px 20px;
    background-color:#FEF9F2; /* Background color */
    transition: all 0.5s ease-in-out;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Shadow effect */
  }

  .navmenu .dropdown ul ul {
    background-color: rgba(33, 37, 41, 0.1);
  }

  .navmenu .dropdown>.dropdown-active {
    display: block;
    background-color: rgba(33, 37, 41, 0.03);
  }

  .mobile-nav-active {
    overflow: hidden;
  }

  .mobile-nav-active .mobile-nav-toggle {
    color: #ffffff;
    position: absolute;
    font-size: 32px;
    top: 15px;
    right: 15px;
    margin-right: 0;
    z-index: 9999;
  }

  .mobile-nav-active .navmenu {
    position: fixed;
    overflow: hidden;
    inset: 0;
    background: rgba(33, 37, 41, 0.8);
    transition: 0.3s;
  }

  .mobile-nav-active .navmenu>ul {
    display: block;
  }
}


 
      /* Sections Header
--------------------------------*/
.section-header h3 {
    font-size: 22px;
    color: #111;
    text-align: center;
    font-weight: 700;
    position: relative;
    padding-bottom: 15px;
  }
  
  .section-header h3::before {
    content: "";
    position: absolute;
    display: block;
    width: 120px;
    height: 1px;
    background: #ddd;
    bottom: 1px;
    left: calc(50% - 60px);
  }
  
  .section-header h3::after {
    content: "";
    position: absolute;
    display: block;
    width: 40px;
    height: 3px;
    background: #18d26e;
    bottom: 0;
    left: calc(50% - 20px);
  }
  
  .section-header p {
    text-align: center;
    padding-bottom: 30px;
    color: #333;
  }

 /*-------------------------------------------------------------- # About Us --------------------------------------------------------------*/
.about {
    padding-bottom: 30px;
}

.about .container {
    box-shadow: 0 5px 25px 0 rgba(214, 215, 216, 0.6);
}

.about .section-title p {
    text-align: left;
    color: #666;
    font-family: "Poppins", sans-serif;
}

.about .about-content {
    padding: 20px;
}

.about .title {
    font-weight: 700;
    margin-bottom: 10px;
    font-size: 18px;
    text-transform: uppercase;
    font-family: "Poppins", 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.about .title a {
    color: #343a40;
    transition: 0.3s;
    text-decoration: none;
}

.about .title a:hover {
    color: #01af6a;
}

.about .description {
    line-height: 24px;
    font-size: 14px;
    font-family: "Poppins", sans-serif;
}

.about .play-btn {
    width: 94px;
    height: 94px;
    background: radial-gradient(#01af6a 50%, rgba(1, 175, 106, 0.4) 52%);
    border-radius: 50%;
    display: block;
    position: absolute;
    left: calc(50% - 47px);
    top: calc(50% - 47px);
    overflow: hidden;
}

.about .play-btn:before {
    content: "";
    position: absolute;
    width: 120px;
    height: 120px;
    -webkit-animation-delay: 0s;
    animation-delay: 0s;
    -webkit-animation: pulsate-btn 2s;
    animation: pulsate-btn 2s;
    -webkit-animation-direction: forwards;
    animation-direction: forwards;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-timing-function: steps;
    animation-timing-function: steps;
    opacity: 1;
    border-radius: 50%;
    border: 5px solid rgba(1, 175, 106, 0.7);
    top: -15%;
    left: -15%;
    background: rgba(198, 16, 0, 0);
}

.about .play-btn:after {
    content: "";
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translateX(-40%) translateY(-50%);
    width: 0;
    height: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 15px solid #fff;
    z-index: 100;
    transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.about .play-btn:hover:before {
    content: "";
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translateX(-40%) translateY(-50%);
    width: 0;
    height: 0;
    border: none;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 15px solid #fff;
    z-index: 200;
    -webkit-animation: none;
    animation: none;
    border-radius: 0;
}

.about .play-btn:hover:after {
    border-left: 15px solid rgba(1, 175, 106, 0.7);
    transform: scale(20);
}

@-webkit-keyframes pulsate-btn {
    0% {
        transform: scale(0.6, 0.6);
        opacity: 1;
    }

    100% {
        transform: scale(1, 1);
        opacity: 0;
    }
}

@keyframes pulsate-btn {
    0% {
        transform: scale(0.6, 0.6);
        opacity: 1;
    }

    100% {
        transform: scale(1, 1);
        opacity: 0;
    }
}

/*-------------------------------------------------------------- # Breadcrumbs --------------------------------------------------------------*/

/*-------------------------------------------------------------- # Breadcrumbs --------------------------------------------------------------*/

.breadcrumbs-header .page-header {
    background-color: #f1fcf8;
    margin-top: 44px;
    height:60vh;
    padding: 140px 0 80px 0;
    position: relative;
}

.breadcrumbs-header .page-header h2 {
  font-size: 3rem;
  font-weight: 800;
  line-height: 60px;
  font-family:"Poppins", sans-serif;
  color: #273f52; /* color-mix equivalent */
}

.breadcrumbs-header .page-header p {
    color: rgba(255, 255, 255, 0.8);
    font-weight: 500;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.breadcrumbs-header nav {
    background-color: #fff;
    padding: 20px 0;
}

@media (max-width: 992px) {
  .header .logo img {
    max-height: 34px;
    margin-right: 8px;
    }
    .breadcrumbs-header .page-header {
        margin-top: 40px;
    }

    .breadcrumbs-header .page-header h2 {
        font-size: 34px;
        font-weight: 500;
        font-weight: bold;
        color: #273f52;
  font-family: "Poppins", sans-serif,Georgia, 'Times New Roman', Times, serif;
    }
}

/*------------- */
.breadcrumbs-header nav ol {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    margin: 0;
    padding: 0;
    font-size: 16px;
    font-weight: 600;
    color: #0e1d34;
}

.breadcrumbs-header nav ol a {
    color: #37517e;
    transition: 0.3s;
    text-decoration: none;
}

.breadcrumbs-header nav ol a:hover {
    text-decoration: underline;
}

.breadcrumbs-header nav ol li+li {
    padding-left: 10px;
}

.breadcrumbs-header nav ol li+li::before {
    display: inline-block;
    padding-right: 10px;
    color: #4278cc;
    content: "/";
}

 Center the modal vertically
 .modal-dialog {
      display: flex;
      align-items: center;
      min-height: calc(100% - 1rem);
    }
    .modal-content {
      margin: auto;
    }

    .custom-btn-model {
        background-color: #01af6a !important;
        color: #ffffff !important;
        font-weight: bold;
    }

    /* Button close effect */
    .btn-close:hover {
      transform: scale(1.2);
    }

    /* Custom modal styling */
    .modal-header {
      background-color: #01af6a;
      color: white;
    }
    .modal-header .btn-close {
      filter: invert(1);
    }
    .modal-body {
      background-color: #f8f9fa;
    }
    .modal-footer {
      background-color: #f8f9fa;
    }

           /* Button styling */
.btn-get-started {
  font-family: "Poppins", sans-serif;
  font-weight: bold;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 14px 32px;
  border-radius: 50px;
  transition: background-color 0.5s, box-shadow 0.5s;
  line-height: 1;
  color: #ffffff;
  background: #01af6a;
  border: 2px solid #01af6a;
  text-decoration: none;
  margin-top: 20px;
}

.btn-get-started:hover {
  background: #018f5a;
  color: #fff;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}


/* Fix for Topbar */
.topbar {
  z-index: 997;
  position: sticky;
  background-color: hsl(170, 75%, 41%);
  color: #ffffff;
  height: 40px;
  padding: 0;
  font-size: 14px;
  transition: all 0.5s;
  display: flex;
  justify-content: center;
  align-items: center;
}

.topbar .contact-info i {
  font-style: normal;
  color: #ffffff;
  margin-right: 10px;
  font-weight: 700;
}

.topbar .contact-info a {
  color: #ffffff;
  padding-left: 5px;
  text-decoration: none;
  font-weight: 700;
}

.topbar .social-links a {
  color: #ffffff;
  margin-left: 20px;
  text-decoration: none;
  font-weight: 700;
}

.topbar .social-links a:hover {
  color: black;
}

.topbar .blinking {
  animation: blink 1s infinite;
}

@keyframes blink {
  0% { opacity: 1; }
  50% { opacity: 0; }
  100% { opacity: 1; }
}



<style>
  /*-------------------------------------------------------------- 
 # Testimonials-courses 
 --------------------------------------------------------------*/ 
 .testimonials-courses 
 .testimonials-carousel, 
 .testimonials-courses 
 .testimonials-slider { 
  overflow: hidden; 
  margin-bottom:20px;
} 
.testimonials-courses .testimonial-item {
  box-sizing: content-box;
  padding: 20px;
  margin: 30px 15px;
  max-height: 400px;
  min-height: 300px;
  box-shadow: 0 0 10px 10px rgba(0, 0, 0, 0.05);
  position: relative;
  background: #fff;
  border-radius: 15px;
  overflow: hidden;
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.testimonials-courses .testimonial-item:hover {
  transform: scale(1.05);
  box-shadow: 0 0 20px 10px rgba(0, 0, 0, 0.1);
}

.testimonials-courses .testimonial-item .testimonial-img { 
  border-radius: 25px 25px 25px 25px; 
  box-shadow: 0 0 10px 10px rgba(0, 0, 0, 0.05);
  overflow: hidden; 
  transition: 0.3s ease-in-out; 
  max-height: 400px; 
  max-width: 100%; 
} 

.testimonials-courses .testimonial-item h3 { 
  margin: 5px 0 5px 0; 
  margin-top: 10px; 
  color: black; 
  font-weight: 700; 
  font-size: 20px; 
  text-align:center;
} 

.testimonials-courses .testimonial-item h4 {
  font-size: 14px;
  background: #5fcf80;
  padding: 7px 14px;
  color: #fff;
  margin: 0;
}
.testimonials-courses .testimonial-item h3 a { 
  color: #1f1f1f; 
  transition: 0.3s; 
  text-decoration: none;
} 
.testimonials-courses .testimonial-item h3 a:hover { 
  color: #25A877; 
} 
.testimonials-courses .testimonial-item h4 { 
  font-size: 14px; 
  color: #1f1f1f; 
  margin: 0; 
} 
.testimonials-courses .testimonial-item p { 
  margin: 10px auto 15px auto; 
  font-size: 14px; 
  color: #1f1f1f; 
  font-weight: 300; 
  font-family: "Poppins", sans-serif; 
  display: -webkit-box;
  -webkit-line-clamp: 4; /* Number of lines to show */
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}

.testimonials-courses .swiper-pagination { 
  margin-top: 20px; position: relative; 
} 
.testimonials-courses .swiper-pagination .swiper-pagination-bullet { 
  width: 12px; 
  height: 12px;
   background-color: #fff; 
   opacity: 1; 
   border: 1px solid #ffc451; 
  } 
.testimonials-courses .swiper-pagination .swiper-pagination-bullet-active { 
  background-color: #ffc451; 
} 
.testimonials-courses .trainer-courses{ 
  padding-top: 15px; 
  border-top: 1px solid #fff; 
} 
.testimonials-courses .trainer-courses .trainer-courses-profile img { 
  max-width: 50px; 
  border-radius: 50px; 
} 
.testimonials-courses .trainer-courses .trainer-courses-profile span { 
  padding-left: 10px; 
  font-weight: 600;
  font-size: 16px; 
  color: #1f1f1f; 
} 

.testimonials-courses .explore-btn {
  align-items: center;
  justify-content: center;
  text-align: center; 
}

.testimonials-courses .explore-btn a {
   text-decoration: none;
   font-weight:bold;
}

.testimonials-courses .btn-get-started {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-size: 18px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 28px;
  border-radius: 10px;
  transition: 0.5s;
  color: #fff;
  background: #00ac4d;
  margin-top: 20px;
  border-color: #0dba4b;
}

.testimonials-courses .btn-get-started:hover {
  background: #1b8b35;
}

.course__ranking {
  display: flex;
  justify-content: space-between;
}
.course__timer {
  color: #25A877;
  border-radius: 10px;
  padding-inline: 10px;
  background-color: #FEE5DF;
}
span.course__vote {
  color: #A2A2A2;
}

.un-vote {
  color: #AEAEAE;
}
.vote {
  font-weight: 900;
  color: #FFC014;
}


</style>
 
    </style>  
    <!-- Google Tag Manager
     <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TSZTNFS2');</script>
     End Google Tag Manager 
     Google tag (gtag.js) 
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11484655961">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11484655961');
</script> -->



<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZZX212RD85"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZZX212RD85');
</script>

<!--Chatbot -->

<script>(function(w, d) { w.CollectId = "665c64b71063215eaa122fd0"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->


  <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSZTNFS2"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
  <!-- End Google Tag Manager (noscript) -->
<!-- Topbar Section 
<div class="topbar d-flex align-items-center sticky-top">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center">
        <a href="mailto:admin@urbancode.in">admin@urbancode.in</a>
      </i>
      <i class="bi bi-phone d-flex align-items-center ms-4">
        <span><a href="tel:+91 9878798797" class="blinking">+91 9878798797</a></span>
      </i>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
      <a href="https://wa.me/919025059775?text=Hello,%20I'm%20interested%20in%20learning%20more%20about%20your%20courses.%20Can%20you%20provide%20more%20information?" class="twitter"><i class="bi bi-whatsapp"></i></a>
      <a href="https://www.facebook.com/urbancode.in/" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="https://www.instagram.com/_urbancode/" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="https://www.linkedin.com/company/urbanc0de/" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>
  </div>
</div> End Topbar -->


<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="images/logo.webp" alt="logo">
        <!-- <h1 class="sitename">Urbancode</h1> -->
      </a>

      <nav id="navmenu" class="navmenu">
       <ul>
          <li><a class="<?php if($endex[0] == ''){echo 'active';} ?>" href="/">Home</a></li>
          <li class="dropdown">
          <a href="/courses" style="background-color: hsl(170, 75%, 41%); padding: 10px 20px; border-radius: 4px; color: #ffffff;">
        <span style="color:#ffffff; font-weight:bold;">Courses</span> 
        <i class="bi bi-chevron-down toggle-dropdown course" style="color: #ffffff;"></i>
    </a>
      <ul class="dropdown-menu">
        
       
        <li class="dropdown">
            <a href="#"><span>Programming Languages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="/python">Core Python</a></li>
                <li><a class="dropdown-item" href="/java">Core JAVA</a></li>
                <li><a class="dropdown-item" href="/advanced-python">Advanced Python</a></li>
                <li><a class="dropdown-item" href="/pyspark">PySpark</a></li>
                <li><a class="dropdown-item" href="/c-cplusplus">C & C++</a></li>
                <li><a class="dropdown-item" href="/html">HTML</a></li>
            </ul>
        </li>

        
        <li class="dropdown">
            <a href="#"><span>Web & App Development</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="/full-stack">Full Stack Development</a></li>
                <li><a class="dropdown-item" href="/mern">MERN Stack</a></li>
                <li><a class="dropdown-item" href="/javascript">JavaScript</a></li>
                <li><a class="dropdown-item" href="/html-css">HTML & CSS</a></li>
                <li><a class="dropdown-item" href="/react-native">React Native</a></li>
                <li><a class="dropdown-item" href="/angular-fullstack">.Net + Angular Full stack</a></li>

                <!-- <li><a class="dropdown-item" href="/ui-ux">UI & UX</a></li> -->

            </ul>
        </li>
       
        <li class="dropdown">
            <a href="#"><span>UI & UX</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="/photoshop">Photoshop</a></li>
                <li><a class="dropdown-item" href="/graphics-design">Graphics</a></li>
                <li><a class="dropdown-item" href="/canvas">Canvas</a></li>
                <li><a class="dropdown-item" href="/figma">Figma</a></li>

            </ul>
        </li>
        



        
        <li class="dropdown">
            <a href="cloud-devops"><span>Cloud & DevOps</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="/aws">AWS</a></li>
                <li><a class="dropdown-item" href="/azure">Azure</a></li>
                <li><a class="dropdown-item" href="/gcp">GCP</a></li>
            </ul>
        </li>

        
       <!-- <li class="dropdown">
            <a href="#"><span>Data Analytics</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="/sas">SAS</a></li>
                <li><a class="dropdown-item" href="/r-program">R Program</a></li>
            </ul>
        </li>

       
        <li class="dropdown">
            <a href="#"><span>Data Science</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="/python-plus-chat-gpt">Python with ChatGPT</a></li>
                <li><a class="dropdown-item" href="/ai-ml">AI & ML</a></li>
            </ul>
        </li>-->
         
        <li class="dropdown">
            <a href="#"><span>DataBase</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="/mysql">MySQL</a></li>
                <li><a class="dropdown-item" href="/mongodb">MongoDB</a></li>
                <li><a class="dropdown-item" href="/ms-sql">MsSQL</a></li>
                <li><a class="dropdown-item" href="/postgresql">PostgreSQL</a></li>


            </ul>
        </li>

        
        <li class="dropdown up-dropdown">
            <a href="#"><span>Data Analytics</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="/power-bi">Power BI</a></li>
                <li><a class="dropdown-item" href="/tableau">Tableau</a></li>
                <li><a class="dropdown-item" href="/alteryx">Alteryx</a></li>
                <li><a class="dropdown-item" href="/power-apps">Power Apps</a></li>


            </ul>
        </li>

        
       <!-- <li class="dropdown up-dropdown">
            <a href="#"><span>Software Testing</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="/selenium-python">Selenium With Python</a></li>
            
            </ul>
        </li>


        
        <li class="dropdown up-dropdown">
            <a href="#"><span>Cyber Security</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="/cybersecurity">Cyber Security</a></li>
                <li><a class="dropdown-item" href="/ethical-hacking">Ethical Hacking</a></li>
            </ul>
        </li>
        
        <li class="dropdown up-dropdown">
            <a href="#"><span>SEO</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="/digital-marketing">Digital Marketing</a></li>
                <li><a class="dropdown-item" href="/ethical-hacking">Ethical Hacking</a></li>
            </ul>
        </li>


       
        <li><a href="/medical-coding">Medical Coding</a></li>-->


      
        <!-- <li class="dropdown up-dropdown">
            <a href="#"><span>Languages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="/spoken-english">Spoken English</a></li>
                <li><a class="dropdown-item" href="/french">French</a></li>
                <li><a class="dropdown-item" href="/german">German</a></li>
                <li><a class="dropdown-item" href="/spanish">Spanish</a></li>
                <li><a class="dropdown-item" href="/japanese">Japanese</a></li>
                <li><a class="dropdown-item" href="/malayalam">Malayalam</a></li>
                <li><a class="dropdown-item" href="/ms-office">Ms Office</a></li>

            </ul>
        </li> -->

       
        <!-- <li class="dropdown up-dropdown">
            <a href="#"><span>English Proficiency Exams</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="/ielts">IELTS</a></li>
                <li><a class="dropdown-item" href="/toefl">TOEFL</a></li>
                <li><a class="dropdown-item" href="/pte">PTE</a></li>
                <li><a class="dropdown-item" href="/oet">OET</a></li>
            </ul>
        </li> -->

       
        <li class="dropdown up-dropdown">
            <a href="#"><span>Kids</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <!-- <li><a class="dropdown-item" href="/appinventor-kids">MIT Appinventor</a></li> -->
                <li><a class="dropdown-item" href="/python-kids">Python jr</a></li>
                <!-- <li><a class="dropdown-item" href="/scratch-kids">Scratch</a></li> -->
                <li><a class="dropdown-item" href="/webdesign-kids">Web Design</a></li>
                <li><a class="dropdown-item" href="/creativewriting-blogging">Creative Writing & Blogging</a></li>
                <li><a class="dropdown-item" href="/book-reading-club-kids">Book Reading Club</a></li>
            </ul>
        </li>
        <li class="dropdown up-dropdown">
            <a href="#"><span>CRM</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="dropdown-submenu">
                <li><a class="dropdown-item" href="/salesforce-administrator">Salesforce Administrator</a></li>
                <li><a class="dropdown-item" href="/salesforce-developer">Salesforce Developer</a></li>
            </ul>
        </li>
        <li><a href="/courses">More Courses</a></li>
    </ul>  
   </li>

          <li><a class="<?php if($endex[0] == 'about'){echo 'active';}else{echo '';} ?>" aria-current="page" href="/about">About Us</a></li>
          <li><a class="<?php if($endex[0] == 'kids'){echo 'active';}else{echo '';} ?>" aria-current="page" href="/kids">Kids Space</a></li>


         
          <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle <?php if($endex[0] == 'events'){echo 'active';}else{echo '';} ?>" href="/events" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Programs
                   </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <li><a class="dropdown-item" href="/events">Events</a></li>
                     <li><a class="dropdown-item" href="/bootcamp">Bootcamp</a></li>
                     <li><a class="dropdown-item" href="/webinar">Webinar</a></li>
                     <li><a class="dropdown-item" href="/workshop">Workshop</a></li>
                  </ul>
          </li>
          <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle <?php if($endex[0] == 'others'){echo 'active';}else{echo '';} ?>" href="#" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Career
                   </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  
                  <!-- <li><a class="dropdown-item" href="/study-abroad">Study Abroad</a></li> -->
                  <li><a class="dropdown-item" href="/internship">Internship</a></li>
                  <li><a class="dropdown-item" href="/jobs">jobs</a></li>
                  <li><a class="dropdown-item" href="/be-our-mentor">Be our Mentor</a></li>
                  <li><a class="dropdown-item" href="/login">Referrals</a></li>
                  </ul>
          </li>
          <li>  <a class="<?php if($endex[0] == 'jobs'){echo 'projects';}else{echo '';} ?>" aria-current="page" href="/projects">Projects</a></li>

          
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!-- <a class="btn-getstarted" href="#">Signup</a> -->

    </div>
   <script>
    const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

      function mobileNavToogle() {
        document.querySelector('body').classList.toggle('mobile-nav-active');
        mobileNavToggleBtn.classList.toggle('bi-list');
        mobileNavToggleBtn.classList.toggle('bi-x');
      }

      if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
   } else {
      console.error('Mobile nav toggle button not found.');
   }

   document.querySelectorAll('#navmenu a').forEach(navmenu => {
      navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
       }
     });
   });

   document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
        navmenu.addEventListener('click', function(e) {
        e.preventDefault();
        this.parentNode.classList.toggle('active');
        this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
        e.stopImmediatePropagation();
       });
    });

   </script>
</header> 

<!-- Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="enquiryModalLabel">Enquire Today</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          <!-- Form inside modal -->
          <form id="bannerenroll" class="enroll-form" onsubmit="bannersendEmail(); return false;">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="banner-name" class="form-label">Name</label>
                <input class="form-control" type="text" placeholder="Enter your name" id="banner-name" required>
              </div>
              <div class="col-md-6">
                <label for="banner-course" class="form-label">Course</label>
                <select class="form-control" id="banner-course" name="course" required>
                  <option value="Select your course" selected disabled>Select your course</option>
                  <option value="MSSQL">MsSQL</option>
                  <option value="Postgresql">Postgresql</option>
                  <option value="MySql">MySql</option>
                  <option value="SAS">SAS</option>
                  <option value="Core Python">Core Python</option>
                  <option value="Core Java">Core Java</option>
                  <option value="Angular JS">Angular JS</option>
                  <option value="UI UX">UI UX</option>
                  <option value="HTML5">HTML5</option>
                  <option value="HTML">HTML</option>
                  <option value="Teradata">Teradata</option>
                  <option value="PowerApps">PowerApps</option>
                  <option value="PySpark">PySpark</option>
                  <option value="Hadoop">Hadoop</option>
                  <option value="AWS">AWS</option>
                  <option value="GCP">GCP</option>
                  <option value="Azure">Azure</option>
                  <option value="Power BI">Power BI</option>
                  <option value="Tableau">Tableau</option>
                  <option value="Alteryx">Alteryx</option>
                  <option value="Selenium">Selenium</option>
                  <option value="Selenium with Python">Selenium with Python</option>
                  <option value="Ethical Hacking">Ethical Hacking</option>
                  <option value="Cyber Security">Cyber Security</option>
                  <option value="R Program">R Program</option>
                  <option value="Python Chatgpt">Python Chatgpt</option>
                  <option value="AI & ML">AI & ML</option>
                  <option value="Digital Marketing">Digital Marketing</option>
                  <option value="Full Stack Development">Full Stack Development</option>
                  <option value="Photoshop">Photoshop</option>
                  <option value="Graphics Design">Graphics Design</option>
                  <option value="Canvas">Canvas</option>
                  <option value="FIGMA">FIGMA</option>
                  <option value="Japanese">Japanese</option>
                  <option value="MS OFFICE">MS OFFICE</option>
                  <option value="Spanish">Spanish</option>
                  <option value="Appinventer">Appinventer</option>
                  <option value="Python jr">Python jr</option>
                  <option value="Scratch">Scratch</option>
                  <option value="Web Design">Web Design</option>
                  <option value="Spoken English">Spoken English</option>
                  <option value="creative writing & Blogging">creative writing & Blogging</option>
                  <option value="book reading club">book reading club</option>
                  <option value="Communication and skill development adults">Communication and skill development adults</option>
                  <option value="German">German</option>
                  <option value="French">French</option>
                  <option value="IELTS">IELTS</option>
                  <option value="TOEFL">TOEFL</option>
                  <option value="OET">OET</option>
                  <option value="Data Analysis">Data Analysis</option>
                  <option value="Medical Coding">Medical Coding</option>
                  <option value="Malesforce Administrator">Salesforce Administrator</option>
                  <option value="Salesforce Developer">Salesforce Developer</option>
                  <option value="c-cplusplus">c-cplusplus</option>
                  <option value="Mongodb">Mongodb</option>
                  <option value="Advanced Python">Advanced Python</option>
                  <option value="mern">mern</option>
                  <option value="Javascript">Javascript</option>
                  <option value="Malayalam">Malayalam</option>
                  <option value="PTE">PTE</option>
                  <option value="Angular-Fullstack">A.Net + Angular Full stack </option>
                  <option value="RPA">Robotic Process Automation</option>
                  <option value="react-native">  React Native</option>
                  <option value="graphic-design-democlass"> Graphic-Design</option>

                

                  


                  







                  <!-- Course options here -->
                </select>
              </div>
              <div class="col-md-6">
                <label for="banner-email" class="form-label">Email Address</label>
                <input class="form-control" type="email" placeholder="Enter your email" id="banner-email" required>
              </div>
              <div class="col-md-6">
                <label for="banner-phone" class="form-label">Phone Number</label>
                <input class="form-control" type="tel" placeholder="Enter your phone" id="banner-phone" required>
              </div>
              <!-- New input for Zip Code -->
              <div class="col-md-6">
                <label for="banner-zipcode" class="form-label">Location Zip Code</label>
                <input class="form-control" type="text" placeholder="Enter your zip code" id="banner-zipcode" required>
              </div>
              <!-- New select for Online/Offline Mode -->
              <div class="col-md-6">
                <label for="banner-mode" class="form-label">Mode</label>
                <select class="form-control" id="banner-mode" name="mode" required>
                  <option value="Select mode" selected disabled>Select mode</option>
                  <option value="Online">Online</option>
                  <option value="Offline">Offline</option>
                </select>
              </div>
            </div>
            <div class="d-flex justify-content-end mt-3">
              <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Submit Enquiry</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>




<!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content shadow-lg rounded-4">
            
            <!-- Modal Header -->
            <div class="modal-header d-flex flex-column align-items-center text-center w-100 border-0 pb-0">
                <h5 class="modal-title fw-bold" id="paymentModalLabel">Complete Your Payment</h5>
                <p class="mb-2"><strong>Course Name:</strong> <span id="courseNameDisplay"></span></p>
                <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <div class="row g-4">
                    
                    <!-- Left Column: Payment Details -->
                    <div class="col-lg-6 d-flex">
                        <div class="card shadow-lg rounded-4 p-4 w-100">
                            <h5 class="text-center fw-bold">Enter Your Details</h5>
                            <form id="paymentForm">
                                <input type="hidden" id="courseName" name="courseName">

                                <div class="mb-3">
                                    <label for="name" class="form-label fw-semibold">Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label fw-semibold">Phone</label>
                                    <input type="tel" class="form-control" id="phone" required>
                                </div>

                                <!-- UPI ID and QR Code -->
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="text-center p-3 border rounded shadow-sm bg-light">
                                            <h6 class="fw-bold">UPI Payment</h6>
                                            <a href="upi://pay?pa=jayapradhap.rajan27-1@okhdfcbank"
                                               class="text-primary fw-bold d-block text-wrap"
                                               style="word-wrap: break-word; font-size: 16px; text-decoration: none;">
                                                Pay Now
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center p-3 border rounded shadow-sm bg-light">
                                            <h6 class="fw-bold">Scan & Pay</h6>
                                            <img src="images/payment/qr.webp" alt="QR Code" class="img-fluid rounded" style="max-width: 100px;">
                                        </div>
                                    </div>
                                </div>

                                <!-- Payment Screenshot Upload -->
                                <div class="mb-3 mt-3">
                                    <label for="paymentScreenshot" class="form-label fw-semibold">Upload Payment Screenshot</label>
                                    <input type="file" class="form-control" id="paymentScreenshot" accept="image/*">
                                </div>

                                <button type="submit" class="btn btn-payment w-100 fw-bold py-2">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- Right Column: Razorpay Payment -->
                    <div class="col-lg-6 d-flex">
                        <div class="card shadow-lg rounded-4 text-center p-4 w-100 d-flex flex-column align-items-center justify-content-center">
                            <h5 class="fw-bold">Proceed with Card Payment</h5>
                            <a href="#" id="razorpayButton" target="_blank" class="btn btn-payment fw-bold px-4 py-2 mt-3">Pay via Razorpay</a>
                            <p class="mt-2 text-muted">Credit and Debit Card only</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<style>
        .btn-payment {
            background: linear-gradient(to right, #4CAF50, #008CBA);
            color: white;
            border: none;
            padding: 12px 20px;
            font-weight: bold;
            transition: 0.3s;
            border-radius: 8px;
        }
        .btn-payment:hover {
            background: linear-gradient(to right, #008CBA, #4CAF50);
        }
    </style>


<!-- Brochure Modal with a Unique Class for Smaller Size -->
<div class="modal fade brochure-modal-specific" id="brochureModal" tabindex="-1" aria-labelledby="brochureModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="brochureModalLabel">Request Your Brochure</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="brochureForm" class="brochure-form" onsubmit="brochureDownload(); return false;">
                    <div class="mb-2">
                        <label for="brochure-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="brochure-name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-2">
                        <label for="brochure-email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="brochure-email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-2">
                        <label for="brochure-phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="brochure-phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<style>
.brochure-modal-specific .modal-content {
    background-color: #ffffff;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: none;
}

.brochure-modal-specific .modal-header {
    background-color: #01af6a;
    color: #fff;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    padding: 15px 20px;
}

.brochure-modal-specific .modal-title {
    font-weight: 700;
    font-size: 1.25rem;
}

.brochure-modal-specific .brochure-form .form-label {
    color: #666;
    font-weight: 500;
    margin-bottom: 8px;
}

.brochure-modal-specific .form-control {
    border-radius: 8px;
    border: 1px solid #ccc;
    padding: 10px 15px;
}

.brochure-modal-specific .brochure-submit {
    background-color: #01af6a;
    border: none;
    padding: 12px;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 8px;
    transition: background-color 0.3s;
}

.brochure-modal-specific .brochure-submit:hover {
    background-color: #018f5a;
}

.brochure-modal-specific .btn-close {
    filter: brightness(10);
}


/*--------------------------------new add code------------*/

/*--Hero SECtion---*/
:root {
  --default-font: "Poppins",  sans-serif ;
  --heading-font: "Poppins",  sans-serif;
  --nav-font: "Poppins",  sans-serif;
}

/* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
:root { 
  --background-color: #ffffff; /* Background color for the entire website, including individual sections */
  --default-color: #444444; /* Default color used for the majority of the text content across the entire website */
  --heading-color: #222222; /* Color for headings, subheadings and title throughout the website */
  --accent-color: #3498db; /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
  --surface-color: #ffffff; /* The surface color is used as a background of boxed elements within sections, such as cards, icon boxes, or other elements that require a visual separation from the global background. */
  --contrast-color: #ffffff; /* Contrast color for text, ensuring readability against backgrounds of accent, heading, or default colors. */
}

/* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
:root {
  --nav-color: #444444;  /* The default color of the main navmenu links */
  --nav-hover-color: #3498db; /* Applied to main navmenu links when they are hovered over or active */
  --nav-mobile-background-color: #ffffff; /* Used as the background color for mobile navigation menu */
  --nav-dropdown-background-color: #ffffff; /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
  --nav-dropdown-color: #444444; /* Used for navigation links of the dropdown items in the navigation menu. */
  --nav-dropdown-hover-color: #3498db; /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
}

/* Color Presets - These classes override global colors when applied to any section or element, providing reuse of the sam color scheme. */

.light-background {
  --background-color: #f4fafd;
  --surface-color: #ffffff;
}

.dark-background {
  --background-color: #060606;
  --default-color: #ffffff;
  --heading-color: #ffffff;
  --surface-color: #252525;
  --contrast-color: #ffffff;
}

/* Smooth scroll */
:root {
  scroll-behavior: smooth;
}

/*--------------------------------------------------------------
# Global Page Titles & Breadcrumbs
--------------------------------------------------------------*/
.page-title {
  --background-color: color-mix(in srgb, var(--default-color), transparent 96%);
  color: var(--default-color);
  background-color: var(--background-color);
  padding: 20px 0;
  position: relative;
}

.page-title h1 {
  font-size: 28px;
  font-weight: 700;
  margin: 0;
}

.page-title .breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0 0 10px 0;
  margin: 0;
  font-size: 14px;
  font-weight: 400;
}

.page-title .breadcrumbs ol li+li {
  padding-left: 10px;
}

.page-title .breadcrumbs ol li+li::before {
  content: "/";
  display: inline-block;
  padding-right: 10px;
  color: color-mix(in srgb, var(--default-color), transparent 70%);
}


/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
.hero {
  
  width: 100%;
  min-height: 70vh;
  position: relative;
  padding: 80px 0 60px 0;
  display: flex;
  align-items: center;
}

.hero h1 {
  margin: 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
}

.hero p {
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  margin: 5px 0 20px 0;
  font-size: 22px;
  font-weight: 400;
}

.hero .btn-get-started {
  font-family: var(--heading-font);
  font-weight: 500;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 36px;
  border-radius: 50px;
  transition: 0.3s;
  border: 2px solid var(--accent-color);
}

.hero .btn-get-started:hover {
  color: var(--contrast-color);
  background: var(--accent-color);
}

.hero .animated {
  animation: up-down 2s ease-in-out infinite alternate-reverse both;
}

@media (max-width: 640px) {
  .hero h1 {
    font-size: 28px;
    line-height: 36px;
  }

  .hero p {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }

  .hero .btn-get-started,
  .hero .btn-watch-video {
    font-size: 13px;
  }
  .main{
  margin-top: 0px !important;
}

.navmenu ul{
  max-height: 360px !important;
}
}

@keyframes up-down {
  0% {
    transform: translateY(10px);
  }

  100% {
    transform: translateY(-10px);
  }
}
.main{
  margin-top: 80px !important;
}
    

    
</style>












