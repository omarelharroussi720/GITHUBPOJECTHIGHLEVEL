
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <nav>
            <h2>MyPortfolio</h2>
            <a href="#">Home</a>
        </nav>

        <ol class="list">
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
            <li>Users</li>
        </ol>
    </header>

    <main>

        <section class="hero">
            <h1>Welcome to My Portfolio</h1>
            <p>Discover my latest projects and work.</p>
        </section>

        <section class="projects-section">

            <div class="section-header">
                <h2>My Projects</h2>
                <p>Total Projects: <?= $totalProjects ?></p>
            </div>

            <div class="projects">

                <?php foreach ($projects as $project): ?>

                    <div class="project-card">

                        <h3><?= htmlspecialchars($project['title']) ?></h3>

                        <p><?= htmlspecialchars($project['description']) ?></p>

                        <?php if ($project['status'] === 'completed'): ?>

                            <span class="completed">Completed</span>

                        <?php else: ?>

                            <span class="progress">In Progress</span>

                        <?php endif; ?>

                        <a href="<?= htmlspecialchars($project['link']) ?>">
                            View Project →
                        </a>

                    </div>

                <?php endforeach; ?>

            </div>

        </section>

    </main>

    <footer>
        <p>© 2026 MyPortfolio. All rights reserved.</p>
    </footer>

</body>
</html>