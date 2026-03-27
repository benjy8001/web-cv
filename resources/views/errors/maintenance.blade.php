<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site en maintenance</title>
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
        .icon {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #a78bfa, #22d3ee);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        h1 { font-size: 2rem; font-weight: 700; color: rgba(255,255,255,0.9); margin-bottom: 0.75rem; }
        p { color: rgba(255,255,255,0.4); font-size: 0.95rem; max-width: 28rem; line-height: 1.6; }
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
            padding: 0.4rem 1rem;
            border-radius: 9999px;
            border: 1px solid rgba(167,139,250,0.3);
            background: rgba(167,139,250,0.08);
            color: #a78bfa;
            font-size: 0.75rem;
            font-weight: 500;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }
        .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #a78bfa;
            animation: pulse 1.5s ease-in-out infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }
    </style>
</head>
<body>
    <div class="icon">⚙</div>
    <div class="badge"><span class="dot"></span> En cours</div>
    <h1>Site en maintenance</h1>
    <p>Le site est temporairement indisponible pour des travaux de maintenance. Merci de revenir dans quelques instants.</p>
</body>
</html>
