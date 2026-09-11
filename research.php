<?php $page = 'research'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Research Grants — Edlira Kalemi Vakaj</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,400;0,500;1,400&family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'partials/nav.php'; ?>
<main>
  <div class="wrap">
    <p class="eyebrow">€2M+ portfolio</p>
    <h1>Research grants</h1>
    <p class="lede">Funded projects as Principal Investigator, Co-Investigator, Academic Lead or Team Member.</p>

    <?php
      $grants = [
        ['title' => 'CANTIER-E', 'value' => '€6.6m total (€400k to BCU)', 'meta' => 'Horizon Europe, 2026–2030 — Principal Investigator. Successor project to ACCORD, continuing to drive impact through the application of AI in the Built Environment.'],
        ['title' => 'Knowledge Transfer Partnership, Hadley Group Ltd', 'value' => '', 'meta' => 'Innovate UK, 2025–2027 — Academic Lead'],
        ['title' => 'Knowledge Transfer Partnership, Buro Happold Ltd', 'value' => '', 'meta' => 'Innovate UK, 2023–2026 — Academic Lead'],
        ['title' => 'ACCORD — Automating Compliance Checking in Construction, Renovation and Demolition', 'value' => '', 'meta' => 'Horizon Europe, 2022–2025 — Principal Investigator'],
        ['title' => 'Knowledge Transfer Partnership, ProBuild 360 Limited', 'value' => '', 'meta' => 'Innovate UK, 2023–2025 — Academic Lead'],
        ['title' => 'Knowledge Transfer Partnership, FourNet Technologies Limited', 'value' => '', 'meta' => 'Innovate UK, 2021–2023 — Academic Lead'],
        ['title' => 'Knowledge Transfer Partnership, Hadley Industries Holdings Limited', 'value' => '', 'meta' => 'Innovate UK, 2021–2023 — Academic Advisor'],
        ['title' => 'EcRoFit — a smart tool for low carbon buildings', 'value' => '', 'meta' => 'European Regional Development Fund, 2020–2023 (Machine Learning Workgroup) — Team Member'],
        ['title' => 'Collaborative knowledge-based DfMA approach to build cost-efficient, low-impact and high-performance houses (extension)', 'value' => '', 'meta' => 'Innovate UK, March–August 2021 — Co-Investigator'],
        ['title' => 'Collaborative knowledge-based (Design for Manufacture and Assembly) DfMA approach to build cost-efficient, low-impact and high-performance houses', 'value' => '', 'meta' => 'Innovate UK, 2018–2021 — Team Member'],
        ['title' => 'Eurostudent VII', 'value' => '', 'meta' => '2018–2021 — Co-Investigator'],
        ['title' => 'RENESENG — Renewable Systems Engineering', 'value' => '', 'meta' => 'FP7 Marie Curie, 2013–2018 (engagement 2016–2018)'],
        ['title' => 'ITG4AU — IT Governance for Albanian Universities', 'value' => '', 'meta' => 'Erasmus+ Programme of the European Commission, 2017–2020 — Co-Investigator'],
        ['title' => 'AGROINNOECO — Transnational Contest of Innovative Ideas in Agri-food', 'value' => '', 'meta' => 'Interreg BallkanMed Programme, 2017–2019 — Co-Investigator'],
        ['title' => 'Keyword Search in Big Linked Data — Summer School', 'value' => '', 'meta' => 'Scholarship, 21–25 August 2017, Austria'],
        ['title' => 'Eurostudent VI', 'value' => '', 'meta' => '2016–2018 — Co-Investigator'],
        ['title' => 'Higher Education Student and Staff Mobility', 'value' => '', 'meta' => 'Erasmus+ Key Action 1, 2015–2017, between NTNU and University of Tirana — Principal Investigator'],
        ['title' => 'StudAVP — Student Audio Video Production', 'value' => '', 'meta' => 'Tempus Programme of the European Union, 2013–2016 — Principal Investigator'],
        ['title' => 'Reasoning WeB Summer School 2012', 'value' => '', 'meta' => 'Scholarship, Technical University of Vienna'],
        ['title' => 'Innovation and Implementation of the Curriculum Vocational Studies in the Field of Digital Television and Multimedia', 'value' => '', 'meta' => 'Tempus Programme of the European Union, 2011–2014 — Principal Investigator'],
      ];
      foreach ($grants as $g):
    ?>
      <div class="grant">
        <div class="grant__top">
          <span class="grant__title"><?php echo $g['title']; ?></span>
          <?php if ($g['value']): ?><span class="grant__value"><?php echo $g['value']; ?></span><?php endif; ?>
        </div>
        <div class="grant__meta"><?php echo $g['meta']; ?></div>
      </div>
    <?php endforeach; ?>

  </div>
<?php include 'partials/footer.php'; ?>
