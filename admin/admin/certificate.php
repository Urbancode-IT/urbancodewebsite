<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ../login");
    exit();
}
if ($_SESSION["user_role"] != 'admin') {
    header("Location: ../referrals");
    exit();
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <link rel="icon" type="image/x-icon" href="../images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="../css/dashboard.css">
    <!-- PDF-Lib for PDF manipulation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf-lib/1.17.1/pdf-lib.min.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
        }

        .main {
            max-width: 90%;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .screen {
            margin-top: 30px;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .text-center {
            text-align: center;
        }

        .btn-primary, .btn-secondary {
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: #4CAF50;
            border: none;
            color: white;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .btn-secondary {
            background-color: #f44336;
            border: none;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #e53935;
        }

        .form-control {
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #4CAF50;
            outline: none;
            box-shadow: 0 0 10px rgba(76, 175, 80, 0.6);
        }

        .form-group label {
            display: block;
            font-weight: bold;
            color: #333;
        }

        .card {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .card-header {
            background-color: #f0f0f0;
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            color: #555;
        }

        .title {
    font-size: 2.5rem;               /* Larger font size for prominence */
    font-weight: bold;               /* Make the title bold */
    text-transform: uppercase;       /* Convert text to uppercase */
    color: #4CAF50;                  /* Use a green color (similar to the button's color) */
    margin-bottom: 20px;             /* Add some space below the title */
    letter-spacing: 1px;             /* Add slight letter spacing */
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);  /* Add a subtle text shadow */
}

    </style>
</head>
<body>
<?php require_once "../config.php"; ?>
<header>   
    <div class="logosec"> 
        <div class="logo"><a href="/"><img src="../images/logo.png" alt="Logo" style="width:225px;"></a></div> 
        <i class="fa-solid fa-bars icn menuicn" id="menuicn" ></i>
    </div> 
</header> 
<div class="main-container"> 
  <div class="navcontainer"> 
      <nav class="nav"> 
          <div class="nav-upper-options"> 
                <a href="../admin/dashboard">
                    <div class="nav-option option"> 
                        <i class="fa-solid fa-gauge-simple-high nav-img"></i>
                        <h3> Dashboard</h3> 
                    </div> 
                </a>
                <a href="../admin/referrals">
                    <div class="nav-option option"> 
                        <i class="fa-solid fa-rotate nav-img"></i>
                        <h3> Referrals</h3> 
                    </div> 
                </a>
                <a href="../admin/events">
                    <div class="nav-option option"> 
                        <i class="fa-brands fa-leanpub nav-img"></i> 
                        <h3> Events</h3> 
                    </div> 
                </a>
                <a href="../admin/testimonials">
                    <div class="nav-option option"> 
                        <i class="fa-solid fa-comments nav-img"></i> 
                        <h3> Testimonials</h3> 
                    </div>
                </a> 
                <a href="../admin/certificate">
                    <div class="nav-option option active"> 
                            <i class="fa-solid fa-certificate nav-img"></i>
                            <h3> Certificate</h3> 
                    </div>
                </a> 
                <a href="../admin/settings">
                    <div class="nav-option option"> 
                            <i class="fa-solid fa-gear nav-img"></i>
                            <h3> Settings</h3> 
                    </div> 
                </a>

              <div class="nav-option logout" onclick="logoutUser()"> 
                    <i class="fa-solid fa-right-from-bracket nav-img"></i>
                    <h3>Logout</h3> 
              </div> 

          </div> 
      </nav> 
  </div> 
  <div class="main">
    <div class="container mt-5">
        <!-- Screen 1: Certificate Input Form -->
        <div id="screen1" class="screen">
            <h1 class="text-center title">Generate Certificate</h1>
            <form id="certificateForm" class="mt-4">
                <div class="form-group">
                    <label for="userName">Name</label>
                    <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter your name" required>
                </div>
                
                <div class="form-group">
                    <label for="certificateType">Certificate Type</label>
                    <select class="form-control" id="certificateType" name="certificateType" required>
                        <option value="">Select a certificate type</option>
                        <option value="com">Completion</option>
                        <option value="par">Participation</option>
                        <option value="app">Appreciation</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="courseNameSelect">Course Name</label>
                    <select class="form-control" id="courseNameSelect" name="courseNameSelect" required>
                        <option value="">Select a course</option>
                        <option value="SQL">SQL</option>
    <option value="SAS">SAS</option>
    <option value="Core Python">Core Python</option>
    <option value="Core Java">Core Java</option>
    <option value="Angular JS">Angular JS</option>
    <option value="UI UX">UI UX</option>
    <option value="HTML5">HTML5</option>
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
    <option value="Graphics">Graphics</option>
    <option value="Canvas">Canvas</option>
    <option value="FIGMA">FIGMA</option>
    <option value="Japanese">Japanese</option>
    <option value="MS OFFICE">MS OFFICE</option>
    <option value="Spanish">Spanish</option>
    <option value="Spoken English">Spoken English</option>
    <option value="Appinventer">Appinventer</option>
    <option value="Python jr">Python jr</option>
    <option value="Scratch">Scratch</option>
    <option value="Web Design">Web Design</option>
    <option value="creative writing">creative writing</option>
    <option value="book reading club">book reading club</option>
    <option value="German">German</option>
    <option value="French">French</option>
    <option value="IELTS">IELTS</option>
    <option value="TOEFL">TOEFL</option>
    <option value="OET">OET</option>
    <option value="Medical Coding">Medical Coding</option>
    <option value="Medical Coding II">Medical Coding II</option>
                        <!-- Add all course options here -->
                        <option value="Others">Others</option>
                    </select>
                    <input type="text" class="form-control mt-2 d-none" id="courseNameInput" name="courseNameInput" placeholder="Enter course name">
                </div>

                <div class="form-group">
                    <label for="certificateNumber">Certificate Number (e.g., 01, 02, 03...)</label>
                    <input type="text" class="form-control" id="certificateNumber" name="certificateNumber" placeholder="Enter certificate number" required>
                </div>

                <!-- Excel file upload input -->
                <div class="form-group">
                    <label for="excelFile">Import Excel File (Optional)  <br>
                    <span style="font-size: 0.9rem; color: #666;">Format: Columns should be <strong>userName</strong>, <strong>courseName</strong>, <strong>certificateNumber</strong></span></label>
                    <input type="file" class="form-control" id="excelFile" accept=".xlsx, .xls">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Generate Certificate</button>
            </form>
        </div>

        <!-- Screen 2: Certificate Preview -->
        <div id="screen2" class="screen d-none">
            <h1 class="text-center">Your Certificate</h1>
            <div class="mt-4 text-center">
                <iframe id="certificatePreview" width="100%" height="500" class="border-0"></iframe>
            </div>
            <button id="backToGenerate" class="btn btn-secondary btn-block mt-4">Back</button>
        </div>
    </div>
</div>


<script>
    let templateBytes = null;

document.addEventListener("DOMContentLoaded", () => {
    showScreen("screen1");
});

// Function to fetch the selected template based on certificate type
async function fetchTemplateBytes(certType) {
    const response = await fetch(`${certType}.pdf`); // Fetch the specific PDF based on type
    return await response.arrayBuffer();
}

// Show or hide course name input based on selection
document.getElementById("courseNameSelect").addEventListener("change", function () {
    const courseNameInput = document.getElementById("courseNameInput");
    if (this.value === "Others") {
        courseNameInput.classList.remove("d-none");
        courseNameInput.setAttribute("required", "required");
    } else {
        courseNameInput.classList.add("d-none");
        courseNameInput.removeAttribute("required");
    }
});

document.getElementById("certificateForm").addEventListener("submit", async (event) => {
    event.preventDefault();

    // Get certificate type
    const certificateType = document.getElementById("certificateType").value;
    if (!certificateType) {
        alert("Please select a certificate type.");
        return;
    }
    
    // Load the appropriate template
    templateBytes = await fetchTemplateBytes(certificateType);

    const excelFileInput = document.getElementById("excelFile");
    if (excelFileInput.files.length > 0) {
        // Handle Excel import if file is provided
        const file = excelFileInput.files[0];
        const data = await readExcelFile(file);
        for (const row of data) {
            const { userName, courseName, certificateNumber } = row;
            await generateAndDownloadCertificate(userName, courseName, certificateNumber);
        }
    } else {
        // Handle manual form input
        const userName = document.getElementById("userName").value;
        const courseNameSelect = document.getElementById("courseNameSelect").value;
        let courseName = courseNameSelect;
        if (courseNameSelect === "Others") {
            courseName = document.getElementById("courseNameInput").value;
        }
        const certificateNumber = document.getElementById("certificateNumber").value;
        await generateAndDownloadCertificate(userName, courseName, certificateNumber);
    }

    showScreen("screen2");
});

// HTML input for file upload
// <input type="file" id="fontFile" accept=".ttf,.otf" />

document.getElementById('fontFile').addEventListener('change', async (event) => {
    const file = event.target.files[0];
    if (file) {
        const arrayBuffer = await file.arrayBuffer();
        // Now pass this arrayBuffer to your generatePDF function as the robotoFontBytes argument
    }
});


// Function to read the Excel file and extract data
async function readExcelFile(file) {
    const reader = new FileReader();
    return new Promise((resolve, reject) => {
        reader.onload = (e) => {
            const data = new Uint8Array(e.target.result);
            const workbook = XLSX.read(data, { type: 'array' });
            const sheetName = workbook.SheetNames[0];
            const sheet = workbook.Sheets[sheetName];
            const jsonData = XLSX.utils.sheet_to_json(sheet);
            resolve(jsonData);
        };
        reader.onerror = reject;
        reader.readAsArrayBuffer(file);
    });
}

// Function to generate PDF and download
async function generateAndDownloadCertificate(userName, courseName, certificateNumber) {
    const certificateCode = `${String(certificateNumber).padStart(5, '0')}`; // Generates UC_00001, etc.
    const pdfBytes = await generatePDF(userName, courseName, certificateCode);
    const fileName = `${certificateCode}_${userName.replace(/\s+/g, '_')}.pdf`; // Filename: UC_00001_username.pdf
    downloadPDF(pdfBytes, fileName);
}

// Function to generate PDF with user details
async function generatePDF(userName, courseName, certificateCode) {
    try {
        const { PDFDocument, rgb, StandardFonts } = PDFLib;
        const pdfDoc = await PDFDocument.load(templateBytes);
        const pages = pdfDoc.getPages();
        const firstPage = pages[0];

        const font = await pdfDoc.embedFont(StandardFonts.Helvetica);
        firstPage.setFont(font);

        const textColor = rgb(73 / 255, 86 / 255, 102 / 255);

        // Draw certificate code at the bottom left
        firstPage.drawText(certificateCode, {
            x: 88,
            y: 46,
            size: 16,
            color: textColor,
        });

        firstPage.drawText(userName, {
            x: 520, 
            y: 320, // Adjusted Y-position based on the certificate layout
            size: 32,
            color: textColor,
        });

        firstPage.drawText(courseName, {
            x: 525,
            y: 245, // Adjusted Y-position for course name
            size: 20,
            color: textColor,
        });

        return await pdfDoc.save(); // Return PDF bytes
    } catch (error) {
        console.error('Error generating PDF:', error);
        throw error;
    }
}

// Function to download the generated PDF
function downloadPDF(pdfBytes, fileName) {
    const blob = new Blob([pdfBytes], { type: 'application/pdf' });
    const link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = fileName;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link); // Clean up
}

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
</body>
</html>
