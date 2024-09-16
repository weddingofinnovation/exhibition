@section('page_title','Member')

@section('content_description','Sell Your Business ')
@section('content_keywords', 'Sell', 'Business', 'expansion')

@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')
@section('page_name',' All Job')
            
             
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        /* Header */
        .membership-header {
            text-align: center;
            background-color: #0056a4; /* Matching the website theme */
            color: #fff;
            padding: 40px 20px;
            margin-bottom: 20px;
        }

        .membership-header h1 {
            font-size: 32px;
            margin: 0;
        }

        .membership-header p {
            font-size: 18px;
            margin-top: 10px;
        }

        /* Membership Plan Card */
        .membership-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }

        .membership-card h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #0056a4;
            text-align: center;
        }

        .membership-card table {
            width: 100%;
            border-collapse: collapse;
        }

        .membership-card table th,
        .membership-card table td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            font-size: 16px;
        }

        .membership-card table th {
            background-color: #f1f1f1;
        }

        .membership-card button {
            display: block;
            width: 100%;
            background-color: #0056a4;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .membership-card button:hover {
            background-color: #003d7a;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .membership-card {
                padding: 20px;
            }

            .membership-card h3 {
                font-size: 20px;
            }

            .membership-card table th, 
            .membership-card table td {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .membership-card h3 {
                font-size: 18px;
            }

            .membership-card table th,
            .membership-card table td {
                padding: 10px;
                font-size: 13px;
            }

            .membership-card button {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>

    <!-- Membership Plan Header -->
    <div class="membership-header">
        <h1>Free Membership Plan</h1>
        <p>Join today to gain access to exclusive exhibitions and networking opportunities.</p>
    </div>

    <!-- Membership Plan Card -->
    <div class="container">
        <div class="membership-card">
            <h3>Membership Plan Details</h3>
            <table>
                <tr>
                    <th>Category</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td>Cost</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td>Event Access</td>
                    <td>Access to selected general exhibitions and virtual events organized by The Exhibition Network.</td>
                </tr>
                <tr>
                    <td>Exhibition Directory</td>
                    <td>Limited access to the exhibitor and event directory. Basic search and filtering.</td>
                </tr>
                <tr>
                    <td>Networking Events</td>
                    <td>Invitation to selected free networking events (online and local).</td>
                </tr>
                <tr>
                    <td>Flight and Embassy Magazine</td>
                    <td>Access to online versions of articles from The Exhibition Network’s features in flight and embassy magazines.</td>
                </tr>
                <tr>
                    <td>Email Notifications</td>
                    <td>Regular updates on upcoming exhibitions, industry news, and trends.</td>
                </tr>
                <tr>
                    <td>Exclusive Delegate Invitations</td>
                    <td>No (general access only).</td>
                </tr>
                <tr>
                    <td>Speakers</td>
                    <td>Notifications about featured speakers but no exclusive access.</td>
                </tr>
                <tr>
                    <td>Event Discounts</td>
                    <td>Up to 10% discount on tickets for premium or paid exhibitions.</td>
                </tr>
                <tr>
                    <td>Exhibition Insights</td>
                    <td>Monthly industry newsletters with articles from embassies and business features.</td>
                </tr>
                <tr>
                    <td>Limited Networking</td>
                    <td>Basic app features, up to 10 contacts per event.</td>
                </tr>
            </table>
            <button>Join Free Now</button>
        </div>
    </div>

   -------------------------

    <!-- Membership Plan Header -->
    <div class="membership-header">
        <h1>Free Membership Plan</h1>
        <p>Join today to gain access to exclusive exhibitions and networking opportunities.</p>
    </div>

    <!-- Membership Plan Card -->
    <div class="container">
        <div class="membership-card">
            <h3>Membership Plan Details</h3>
            <table>
                <tr>
                    <th>Category</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td>Cost</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td>Event Access</td>
                    <td>Access to selected general exhibitions and virtual events organized by The Exhibition Network.</td>
                </tr>
                <tr>
                    <td>Exhibition Directory</td>
                    <td>Limited access to the exhibitor and event directory. Basic search and filtering.</td>
                </tr>
                <tr>
                    <td>Networking Events</td>
                    <td>Invitation to selected free networking events (online and local).</td>
                </tr>
                <tr>
                    <td>Flight and Embassy Magazine</td>
                    <td>Access to online versions of articles from The Exhibition Network’s features in flight and embassy magazines.</td>
                </tr>
                <tr>
                    <td>Email Notifications</td>
                    <td>Regular updates on upcoming exhibitions, industry news, and trends.</td>
                </tr>
                <tr>
                    <td>Exclusive Delegate Invitations</td>
                    <td>No (general access only).</td>
                </tr>
                <tr>
                    <td>Speakers</td>
                    <td>Notifications about featured speakers but no exclusive access.</td>
                </tr>
                <tr>
                    <td>Event Discounts</td>
                    <td>Up to 10% discount on tickets for premium or paid exhibitions.</td>
                </tr>
                <tr>
                    <td>Exhibition Insights</td>
                    <td>Monthly industry newsletters with articles from embassies and business features.</td>
                </tr>
                <tr>
                    <td>Limited Networking</td>
                    <td>Basic app features, up to 10 contacts per event.</td>
                </tr>
            </table>
            <button>Join Free Now</button>
        </div>
    </div>

</body>
</html>


