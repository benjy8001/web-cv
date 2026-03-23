<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 — Accès refusé</title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            min-height: 100vh;
            background-color: #0a0a0f;
            color: #fff;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
        }
        .code {
            font-size: clamp(6rem, 20vw, 10rem);
            font-weight: 800;
            line-height: 1;
            background: linear-gradient(135deg, #a78bfa, #22d3ee);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.5rem;
        }
        h1 { font-size: 1.5rem; font-weight: 600; color: rgba(255,255,255,0.85); margin-bottom: 0.75rem; }
        p { color: rgba(255,255,255,0.4); font-size: 0.95rem; margin-bottom: 2.5rem; }
        a {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.65rem 1.5rem;
            border-radius: 9999px;
            border: 1px solid rgba(255,255,255,0.15);
            background: rgba(255,255,255,0.04);
            color: rgba(255,255,255,0.6);
            text-decoration: none;
            font-size: 0.875rem;
            transition: all 0.2s;
        }
        a:hover { border-color: rgba(167,139,250,0.5); color: #a78bfa; background: rgba(167,139,250,0.08); }
    </style>
</head>
<body>
    <div class="code">403</div>
    <h1>Accès refusé</h1>
    <p>Vous n'avez pas les permissions nécessaires pour accéder à cette page.</p>
    <a href="/">← Retour à l'accueil</a>
</body>
</html>
