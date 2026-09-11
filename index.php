<?php $page = 'index'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edlira Kalemi Vakaj — Professor of Applied AI</title>
  <meta name="description" content="Edlira Kalemi Vakaj, Professor of Applied AI at Birmingham City University. Research in semantic web, knowledge graphs and AI for the built environment.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,400;0,500;1,400&family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'partials/nav.php'; ?>
<main>
  <div class="wrap">

    <div class="hero">
      <div>
        <p class="eyebrow">Curriculum Vitae</p>
        <h1>Applied AI for knowledge&nbsp;graphs and the built&nbsp;environment</h1>
        <p class="lede">
          I am Professor of Applied AI at Birmingham City University, where I lead the
          Natural Language Processing Lab and serve as Research Lead for the Department
          of Computer Science. My work sits at the intersection of semantic web
          technologies, knowledge graphs, and their application to building compliance,
          construction, and sustainability.
        </p>
      </div>
      <div class="hero__photo">
        <img src="images/profile.jpg" alt="Portrait of Edlira Kalemi Vakaj" onerror="this.src='https://placehold.co/200x240/EFEEE5/565C51?text=Photo'">
      </div>
    </div>

    <div class="callout">
      <span class="callout__label">Current</span>
      <h3>Professor of Applied AI</h3>
      <p>Birmingham City University — Faculty of Computing, Engineering and Built Environment</p>
      <p>
        Principal Investigator of CANTIER-E, a €6.6m Horizon Europe project (2026–2030)
        continuing the impact of the ACCORD project on AI in the Built Environment.
        Also Professor of Neuro-symbolic AI (part time) at King's College London,
        Informatics Department.
      </p>
    </div>

    <div class="section">
      <h2>Research focus</h2>
      <p class="lede">Areas I publish, supervise and teach in.</p>
      <div class="tags">
        <span>Semantic Web</span>
        <span>Knowledge Graphs</span>
        <span>Natural Language Processing</span>
        <span>Neuro-symbolic AI</span>
        <span>AI in the Built Environment</span>
        <span>Automated Compliance Checking</span>
        <span>Ontology Engineering</span>
      </div>
    </div>

    <div class="section">
      <h2>Elsewhere on this site</h2>
      <ul class="plain" style="display:grid; gap:10px;">
        <li><a href="experience.php">Full career history →</a></li>
        <li><a href="research.php">Research grants portfolio (€2M+) →</a></li>
        <li><a href="publications.php">Publications →</a></li>
        <li><a href="contact.php">Get in touch →</a></li>
      </ul>
    </div>

  </div>
<?php include 'partials/footer.php'; ?>
