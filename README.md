## Liberu Accounting - Laravel 10 / PHP 8.2 Backend
 ![Latest Stable Version](https://img.shields.io/github/release/laravel-liberu/genealogy.svg) 
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/laravel-liberu/genealogy/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/laravel-liberu/genealogy/?branch=master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/laravel-liberu/genealogy/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![StyleCI](https://github.styleci.io/repos/135390590/shield?branch=master)](https://github.styleci.io/repos/135390590)
[![CodeFactor](https://www.codefactor.io/repository/github/familytree365/genealogy/badge/master)](https://www.codefactor.io/repository/github/familytree365/genealogy/overview/master)
[![codebeat badge](https://codebeat.co/badges/911f9e33-212a-4dfa-a860-751cdbbacff7)](https://codebeat.co/projects/github-com-modulargenealogy-genealogy-master)
[![CircleCI](https://circleci.com/gh/laravel-liberu/genealogy.svg?style=svg)](https://circleci.com/gh/laravel-liberu/genealogy)

<!--/h-->
### Description
Liberu Accounting is an advanced and comprehensive accounting software solution currently in development, poised to revolutionize the way businesses manage their financial operations. This state-of-the-art software is designed to meet the diverse needs of businesses across various industries, providing a seamless and efficient accounting experience.

Key Features:

Multi-Module Integration:
Liberu Accounting seamlessly integrates core accounting modules, including general ledger, accounts payable, accounts receivable, payroll, inventory management, fixed assets, and more. This integration ensures a cohesive financial management system for comprehensive business insight.

User-Friendly Interface:
The software boasts an intuitive and user-friendly interface, making it accessible to both accounting professionals and business owners. The intuitive design streamlines data entry and navigation, reducing the learning curve and boosting productivity.

Customization and Scalability:
Liberu Accounting allows for extensive customization to adapt to the unique needs of different businesses. From custom chart of accounts to personalized reports and dashboards, users can tailor the software to fit their specific requirements. Moreover, the software is scalable to grow alongside the business, accommodating increasing data volumes and evolving needs.

Real-time Financial Reporting:
Access to real-time financial reports and analytics is a core feature of Liberu Accounting. Users can generate detailed financial statements, cash flow forecasts, balance sheets, and profit and loss statements with just a few clicks, enabling informed decision-making at any given moment.

Automation and AI Integration:
Leveraging artificial intelligence (AI) and automation, Liberu Accounting automates routine accounting tasks such as data entry, reconciliation, and categorization. This results in enhanced accuracy, efficiency, and reduced manual workload, allowing users to focus on strategic financial initiatives.

Compliance and Security:
Liberu Accounting ensures adherence to the latest accounting standards and compliance requirements. With robust data encryption, role-based access controls, and regular security updates, the software provides a secure environment to handle sensitive financial information.

Multi-platform Accessibility:
Users can access Liberu Accounting from various devices, including desktop computers, laptops, tablets, and smartphones. The software supports both web-based and mobile applications, enabling flexibility and convenience for on-the-go accounting management.

Collaboration and Communication:
Facilitating collaboration within teams and external stakeholders, Liberu Accounting offers features for real-time communication, file sharing, and task management. This fosters efficient teamwork and ensures everyone stays aligned on financial goals and objectives.

Liberu Accounting is set to revolutionize the accounting landscape by offering a feature-rich, adaptable, and user-centric software solution. Its innovative design and functionality aim to empower businesses to optimize financial operations, drive growth, and make informed strategic decisions.

<!--/h-->

## Demostration website
<!--/h-->

### Installation steps

1. Begin by downloading the project using the command `git clone https://github.com/laravel-liberu/accounting.git`

2. Next, make a copy of the `.env.example` file and rename it as `.env`. Open the `.env` file and update the necessary details according to your specific configuration.

3. Run the command `composer install` to install the project dependencies. If you are using Windows, you may need to run `composer install --ignore-platform-reqs` instead.

4. Generate an application key by executing the command `php artisan key:generate`

5. Launch the project by running `php artisan serve`.

6. To set up the database tables and seed them with initial data, run the command `php artisan migrate --seed`

7. If needed, you can customize the configuration files located in config/enso/*.php according to your requirements.

8. For certain configurations, you may need to set up sanctum stateful domains and session domain in the `.env` file. Additionally, add your domains to the `config/cors.php` file.

9. Lastly, follow the installation steps for the client side by visiting the link provided: https://github.com/liberu-ui/accounting.

10. Launch the site and log into the project using the following credentials:

User: `admin@liberu.co.uk`
Password: `password`


By following these steps, you will successfully download the project, configure the necessary environment variables, install dependencies, generate a key, run the project, migrate the database, customize configurations if needed, and set up the client-side application. You can then log in to the project with the specified user credentials and begin exploring its features.

<!--/h-->

### Contributions

We warmly welcome new contributions from the community! We believe in the power of collaboration and appreciate any involvement you'd like to have in improving our project. Whether you prefer submitting pull requests with code enhancements or raising issues to help us identify areas of improvement, we value your participation.

If you have code changes or feature enhancements to propose, pull requests are a fantastic way to share your ideas with us. We encourage you to fork the project, make the necessary modifications, and submit a pull request for our review. Our team will diligently review your changes and work together with you to ensure the highest quality outcome.

However, we understand that not everyone is comfortable with submitting code directly. If you come across any issues or have suggestions for improvement, we greatly appreciate your input. By raising an issue, you provide valuable insights that help us identify and address potential problems or opportunities for growth.

Whether through pull requests or issues, your contributions play a vital role in making our project even better. We believe in fostering an inclusive and collaborative environment where everyone's ideas are valued and respected.

We look forward to your involvement, and together, we can create a vibrant and thriving project. Thank you for considering contributing to our community!
<!--/h-->
### License

This project is licensed under the MIT license, granting you the freedom to utilize it for both personal and commercial projects. The MIT license ensures that you have the flexibility to adapt, modify, and distribute the project as per your needs. Feel free to incorporate it into your own ventures, whether they are personal endeavors or part of a larger commercial undertaking. The permissive nature of the MIT license empowers you to leverage this project without any unnecessary restrictions. Enjoy the benefits of this open and accessible license as you embark on your creative and entrepreneurial pursuits.
<!--/h-->
