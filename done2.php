<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Success</title>
<style>
  :root{
    --green:#20b34f;   /* circle & tick */
    --card:#ffffff;    /* card bg */
    --border:#eee;     /* card border */
  }

  /* Center the card */
  body{
    margin:0;
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#fff;
    font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
    color:#222;
  }

  .success-card{
    width:min(92vw,560px);
    background:var(--card);
    border:1px solid var(--border);
    border-radius:16px;
    box-shadow:0 6px 20px rgba(0,0,0,.06);
    padding:48px 28px 36px;
    text-align:center;
  }

  /* SVG icon sizing */
  .check-icon{
    display:block;
    width:min(48vw,240px);
    height:auto;
    margin:0 auto 18px;
  }

  h1{
    margin:10px 0 0;
    font-size: clamp(26px, 4.5vw, 44px);
    font-weight: 700;
    letter-spacing:.2px;
  }

  .actions{
    margin-top:26px;
    display:flex;
    gap:14px;
    justify-content:center;
  }
  .btn{
    border:0;
    border-radius:12px;
    padding:10px 18px;
    font-weight:600;
    cursor:pointer;
  }
  .btn.prev{ background:#0ea5b7; color:#fff; }
  .btn.next{ background:#ef4b84; color:#fff; }

  /* Draw animation */
  .circle, .tick{
    fill:none;
    stroke:var(--green);
    stroke-width:6;
    stroke-linecap:round;
    stroke-linejoin:round;
  }
  .circle{
    stroke-dasharray: 301.59;           /* ~2πr with r=48 */
    stroke-dashoffset: 301.59;
    animation: draw .8s ease-out forwards;
  }
  .tick{
    stroke-dasharray: 96;
    stroke-dashoffset: 96;
    animation: draw .6s .55s ease-out forwards;
  }
  @keyframes draw { to { stroke-dashoffset: 0; } }

  /* Respect users who prefer no motion */
  @media (prefers-reduced-motion: reduce){
    .circle, .tick{ animation: none; stroke-dashoffset: 0; }
  }
</style>
</head>
<body>

  <div class="success-card" role="status" aria-live="polite">
    <!-- Perfect circle + check using precise SVG -->
    <svg class="check-icon" viewBox="0 0 120 120" aria-hidden="true">
      <circle class="circle" cx="60" cy="60" r="48"/>
      <polyline class="tick" points="38,60 54,76 82,46"/>
    </svg>

    <h1>Successful</h1>

    <div class="actions">
      <button class="btn prev" type="button">Previous</button>
      <button class="btn next" type="button">Next</button>
    </div>
  </div>

</body>
</html>
