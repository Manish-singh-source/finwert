<?php
$enquiries = [
    [
        'id' => 101,
        'name' => 'Manish',
        'email' => 'manish@example.com',
        'phone' => '7039553407',
        'message' => 'test',
        'submitted_at' => '2026-10-01 11:24 AM',
        'status' => 'New'
    ],
    [
        'id' => 102,
        'name' => 'Aditi Sharma',
        'email' => 'aditi@example.com',
        'phone' => '9876543210',
        'message' => 'Need help with tax advisory services for our startup.',
        'submitted_at' => '2026-10-01 09:35 AM',
        'status' => 'Viewed'
    ],
    [
        'id' => 103,
        'name' => 'Rahul Verma',
        'email' => 'rahul@example.com',
        'phone' => '9988776655',
        'message' => 'Looking for corporate compliance support and financial planning advice.',
        'submitted_at' => '2026-09-30 06:10 PM',
        'status' => 'New'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finwert Enquiries</title>
    <link rel="shortcut icon" href="../assets/img/logo/fav.png" type="image/png">
    <link rel="stylesheet" href="../assets/css/plugins/bootstrap.min.css">
    <style>
        :root {
            --bg: #f3f7fb;
            --panel: #ffffff;
            --line: #e8edf5;
            --primary: #0d254d;
            --primary-soft: #eef4ff;
            --text: #1f2d3d;
            --muted: #6e7a8c;
            --accent: #1a73e8;
            --success: #1d9d6c;
            --warning: #f5b942;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: linear-gradient(180deg, #f5f8fc 0%, #edf3fb 100%);
            font-family: "Segoe UI", Arial, sans-serif;
            color: var(--text);
        }

        .topbar {
            background: linear-gradient(135deg, #0a1f3d 0%, #173d73 100%);
            color: #fff;
            padding: 18px 0;
            box-shadow: 0 8px 20px rgba(13, 37, 77, 0.12);
        }

        .brand-wrap {
            display: flex;
            align-items: center;
            gap: 16px;
            font-weight: 700;
            font-size: 1.6rem;
            letter-spacing: 0.2px;
        }

        .brand-wrap img {
            width: 120px;
            height: auto;
            background: rgba(255,255,255,0.09);
            border-radius: 10px;
            padding: 8px 12px;
        }

        .main-wrap {
            max-width: 1280px;
            margin: 28px auto;
            padding: 0 18px;
        }

        .summary-row {
            display: grid;
            grid-template-columns: repeat(3, minmax(160px, 1fr));
            gap: 18px;
            margin-bottom: 24px;
        }

        .summary-card {
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 18px 20px;
            box-shadow: 0 10px 22px rgba(15, 33, 62, 0.04);
        }

        .summary-card .label {
            color: var(--muted);
            font-size: 0.82rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-bottom: 8px;
            display: block;
        }

        .summary-card .value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
        }

        .table-panel {
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(15, 33, 62, 0.06);
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 22px 24px;
            border-bottom: 1px solid var(--line);
            background: var(--primary-soft);
        }

        .table-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            margin: 0;
        }

        .table-badge {
            background: rgba(26, 115, 232, 0.1);
            color: var(--accent);
            border: 1px solid rgba(26, 115, 232, 0.18);
            padding: 7px 12px;
            border-radius: 999px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 860px;
        }

        thead th {
            background: #f9fbff;
            padding: 16px 18px;
            text-align: left;
            font-size: 0.82rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            border-bottom: 1px solid var(--line);
        }

        tbody td {
            padding: 16px 18px;
            border-bottom: 1px solid var(--line);
            vertical-align: top;
            color: var(--text);
        }

        tbody tr:hover {
            background: #fafcff;
        }

        .name-cell {
            font-weight: 700;
            color: var(--primary);
        }

        .meta {
            color: var(--muted);
            font-size: 0.8rem;
            margin-top: 4px;
        }

        .status-pill {
            display: inline-flex;
            align-items: center;
            padding: 7px 10px;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.03em;
        }

        .status-new {
            background: rgba(245, 185, 66, 0.12);
            color: #9c6700;
        }

        .status-viewed {
            background: rgba(29, 157, 108, 0.12);
            color: #0f7a56;
        }

        .message-content {
            max-width: 420px;
            line-height: 1.6;
        }

        .email-link {
            color: var(--accent);
            text-decoration: none;
        }

        .email-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .summary-row {
                grid-template-columns: 1fr;
            }

            .table-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="topbar">
        <div class="container">
            <div class="brand-wrap">
                <img src="../assets/img/logo/logo.png" alt="Finwert Logo">
                <span>Finwert Enquiries</span>
            </div>
        </div>
    </div>

    <div class="main-wrap">
        <div class="summary-row">
            <div class="summary-card">
                <span class="label">Total</span>
                <div class="value"><?php echo count($enquiries); ?></div>
            </div>
            <div class="summary-card">
                <span class="label">New</span>
                <div class="value"><?php echo count(array_filter($enquiries, fn($item) => $item['status'] === 'New')); ?></div>
            </div>
            <div class="summary-card">
                <span class="label">Viewed</span>
                <div class="value"><?php echo count(array_filter($enquiries, fn($item) => $item['status'] === 'Viewed')); ?></div>
            </div>
        </div>

        <div class="table-panel">
            <div class="table-header">
                <h2 class="table-title">Recent Contact Enquiries</h2>
                <span class="table-badge">Inbox</span>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Submitted</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($enquiries as $entry): ?>
                            <tr>
                                <td>#<?php echo (int) $entry['id']; ?></td>
                                <td class="name-cell"><?php echo htmlspecialchars($entry['name'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td>
                                    <a class="email-link" href="mailto:<?php echo htmlspecialchars($entry['email'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($entry['email'], ENT_QUOTES, 'UTF-8'); ?></a>
                                </td>
                                <td><?php echo htmlspecialchars($entry['phone'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td class="message-content"><?php echo nl2br(htmlspecialchars($entry['message'], ENT_QUOTES, 'UTF-8')); ?></td>
                                <td>
                                    <span class="status-pill <?php echo $entry['status'] === 'New' ? 'status-new' : 'status-viewed'; ?>"><?php echo htmlspecialchars($entry['status'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </td>
                                <td>
                                    <?php echo htmlspecialchars($entry['submitted_at'], ENT_QUOTES, 'UTF-8'); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
