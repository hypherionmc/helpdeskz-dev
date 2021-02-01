<?php
return [
    'login' => [
        'title' => 'Login into your account',
        'invalidUsernamePassword' => 'Invalid username or password.',
        'lockedMinutes' => 'Login locked for %minutes% minutes',
        'attemptNumber' => '(attempt: %attempt1% of %attempt2%)',
        'accountLocked' => 'Account is locked.',
        'rememberMe' => 'Remember me',
        'button' => 'Login'
    ],
    'dashboard' => [
        'menu' => 'Dashboard'
    ],
    'tickets' => [
        'menu' => 'Tickets',
        'showingResults' => 'Showing %x% to %y% of %z%',
        'totalReplies' => '%number% replies',
        'id' => 'Ticket ID',
        'removeConfirmation' => 'Do you really want to remove these tickets?',
        'showOverdueOnly' => 'Show only overdue tickets',
        'active' => 'Active',
        'attachmentRemoved' => 'Attachment was removed.',
        'messageSent' => 'Your message has been sent.',
        'newTicket' => 'New ticket',
        'submitNewTicket' => 'Submit new ticket',
        'fullName' => 'Optional. If ticket will be sent to an existing client, then you can only enter the email.',
        'departments' => 'Departments',
        'agentsAssigned' => 'Agents assigned',
        'departmentsRemoveConfirmation' => 'Do you really want to remove this department and its tickets?',
        'departmentRemoved' => 'Department and its tickets were removed.',
        'departmentUpdated' => 'Department was updated.',
        'editDepartment' => 'Edit department',
        'newDepartment' => 'New department',
        'departmentCreated' => 'New department has been created.'
    ],
    'account' => [
        'menu' => 'Account',
        'online' => 'online',
        'loginLog' => 'Login logs',
        'logout' => 'Log Out',
        'profile' => 'Profile',
        'changePassword' => 'Change password',
        'timezone' => 'Timezone',
        'timezoneDescription' => 'If you do not select any, you will use the the help desk default timezone.',
        'passwordUpdated' => 'Password has been changed.',
        'profileUpdated' => 'Your profile has been updated.',
        'avatarRemoved' => 'Avatar has been removed.'
    ],
    'cannedResponses' => [
        'menu' => 'Canned responses',
        'removeConfirmation' => 'Do you really want to remove these canned responses?',
        'edit' => 'Edit canned response',
        'new' => 'New canned response'
    ],
    'kb' => [
        'menu' => 'Knowledge Base',
        'articles' => 'Articles',
        'categories' => 'Categories',
        'newCategory' => 'New category',
        'category' => 'Category',
        'editCategory' => 'Edit category',
        'addSubcategory' => 'Add subcategory',
        'newArticle' => 'New article',
        'removeCategory' => 'Remove category',
        'removeConfirmation' => 'Do you really want to remove this category and its sub categories and articles?',
        'categoryRemoved' => 'Category has been removed.',
        'categoryCreated' => 'New category has been created.',
        'categoryUpdated' => 'Category has been updated.',
        'article' => 'Article',
        'author' => 'Author',
        'editArticle' => 'Edit article',
        'removeArticleConfirmation' => 'Do you really want to remove this article?'
    ],
    'agents' => [
        'menu' => 'Agents',
        'agentRemoved' => 'Agent has been removed.',
        'registration' => 'Registration',
        'lastLogin' => 'Last login',
        'administrator' => 'Administrator',
        'agent' => 'Agent',
        'edit' => 'Edit agent',
        'new' => 'New agent',
        'informationUpdated' => 'Agent information has been updated.',
        'removeConfirmation' => 'Do you really want to remove this agent?',
        'agentCreated' => 'New agent has been created.',
        'assignedDepartments' => 'Assigned departments'
    ],
    'settings' => [
        'menu' => 'Setup',
        'general' => 'General settings',
        'security' => 'Security settings',
        'tickets' => 'Tickets settings',
        'kb' => 'KB settings',
        'emailAddresses' => 'Email addresses',
        'emailTemplates' => 'Email templates',
        'changeLogo' => 'Change logo',
        'logoRestored' => 'Default logo was restored.',
        'logoChanged' => 'Logo has been changed.',
        'brandName' => 'Brand name',
        'brandNameDescription' => ' The company name will be used to brand the support center and outgoing emails. For example: HelpDeskZ Inc.',
        'windowTitle' => 'Window title',
        'windowTitleDescription' => 'This is the title that appears in the browser tab. If your helpdesk page is bookmarked, this will be the title/name of the site page.',
        'pageSize' => 'Default page size',
        'pageSizeDescription' => 'Choose the number of items shown per page.',
        'dateFormat' => 'Date format',
        'dateFormatDescription' => 'Define the date format for clients. [a]See the PHP Date Formatting Table[/a]',
        'defaultTimezone' => 'Default timezone',
        'defaultTimezoneDescription' => 'Select the default time zone for new clients or staff, this will be apply if client or staff did not select any on their preferences.',
        'defaultServerTimezone' => 'Default server timezone',
        'maintenanceMode' => 'Maintenance mode',
        'maintenanceMessage' => 'Maintenance message',
        'recaptchaStatus' => 'reCAPTCHA status',
        'siteKey' => 'Site key',
        'privateKey' => 'Private key',
        'maxLoginAttempts' => 'Maximum number of login attempts',
        'minutesIpLocking' => 'Minutes of IP locking after exceeding the maximum number login attempts',
        'updated' => 'Settings were updated.',
        'displayOrderReplies' => 'Display order for ticket replies',
        'ticketsPerPage' => 'Tickets per page',
        'ticketsPerPageDescription' => 'The maximum number of tickets to show before splitting across multiple pages.',
        'repliesPerPage' => 'Replies per page',
        'repliesPerPageDescription' => 'The maximum number of ticket replies to show before splitting across multiple pages.',
        'defaultDeadline' => 'Default reply time deadline',
        'defaultDeadlineDescription' => 'If agent is not responded to within these hours, the ticket will be marked as overdue.',
        'defaultAutoClose' => 'Default time to close ticket',
        'defaultAutoCloseDescription' => 'If client does not respond after these hours, the ticket will be automatically closed.',
        'allowAttachments' => 'Allow attachments',
        'numberAttachments' => 'Number of attachments allowed',
        'maxUploadSize' => 'Max upload size',
        'maxUploadSizeDescription' => 'According to your PHP configuration, it can not be higher than %size%',
        'allowedFileTypes' => 'Allowed file types',
        'allowedFileTypesDescription' => 'Enter the file extension allowed for attachments separated by commas.',
        'newestReplyFirst' => 'Newest reply first',
        'oldestReplyFirst' => 'Oldest reply first',
        'articlesUnderCategory' => 'Articles to display under a category',
        'charLimitArticlePreview' => 'Article preview character limit',
        'charLimitArticlePreviewDescription' => 'The maximum number of characters to display under article previews.',
        'popularArticles' => 'Number of popular articles to display',
        'newestArticles' => 'Number of latest articles to display',
        'editEmailTemplate' => 'Edit email template',
        'defaultEmailAddressDescription' => 'The default email address is used to send notifications or messages from departments that do not have an associated email address.',
        'newEmailAddress' => 'New email address',
        'emailDeletionConfirm' => 'Do you really want to remove this email?',
        'outgoing' => 'Outgoing',
        'host' => 'Host',
        'port' => 'Port',
        'encryption' => 'Encryption',
        'incoming' => 'Incoming',
        'incomingInformation' => 'System will delete all emails from the mailbox once downloaded. This is done to ensure best performance for the email handling process on web server side. If you want a backup of the emails, then we recommend to create a new mailbox where you forward all incoming mails to.',
        'editEmailAddress' => 'Edit email address',
        'emailTemplateUpdated' => 'Email template was updated.',
        'defaultEmailChanged' => 'Default email address was changed.',
        'emailRemoved' => 'Email address was removed.',
        'smtpHost' => 'SMTP Host',
        'smtpPort' => 'SMTP Port',
        'smtpEncryption' => 'SMTP Encryption',
        'incomingHost' => 'Incoming Host',
        'incomingPort' => 'Incoming Port',
        'incomingUsername' => 'Incoming Username',
        'incomingPassword' => 'Incoming Password',
        'emailCreated' => 'New email has been added.',
        'emailUpdated' => 'Email has been updated.',
    ],
    'tools' => [
        'menu' => 'Tools',
        'customFields' => 'Custom fields',
        'fieldTitle' => 'Field title',
        'fieldType' => 'Field type',
        'required' => 'Required',
        'newCustomField' => 'New custom field',
        'editCustomField' => 'Edit custom field',
        'textField' => 'Text field',
        'textArea' => 'Text area',
        'checkbox' => 'Checkbox',
        'radio' => 'Radio',
        'dropdownSelect' => 'Drop-down select',
        'date' => 'Date',
        'defaultValue' => 'Default value',
        'options' => 'Options',
        'optionsDescription' => ' Enter one option per line. Each line will be a choice your customers can choose from',
        'select' => 'Select',
        'customFieldInserted' => 'New custom field has been created.',
        'customFieldUpdated' => 'Custom fields has been updated.',
        'customFieldConfirm' => 'Do you really want to remove this custom field?',
        'invalidCustomField' => 'Invalid custom field.',
        'customFieldRemoved' => 'Custom field has been removed.'
    ],
    'users' => [
        'menu' => 'Users',
        'newUser' => 'New user',
        'editUser' => 'Edit user',
        'removeUserConfirmation' => 'Do you really want to remove this user and his/her tickets?',
        'userRemoved' => 'User has been removed.',
        'notifyNewAccount' => 'Send email to user with account information',
        'accountCreated' => 'User account has been created.',
        'accountUpdated' => 'User account has been updated.'
    ],
    'form' => [
        'username' => 'Username',
        'password' => 'Password',
        'searchTicket' => 'Search ticket',
        'keyword' => 'Keyword',
        'dateOpened' => 'Date opened',
        'lastUpdate' => 'Last update',
        'department' => 'Department',
        'allDepartments' => 'All departments',
        'status' => 'Status',
        'search' => 'Search',
        'open' => 'Open',
        'answered' => 'Answered',
        'awaiting_reply' => 'Awaiting reply',
        'in_progress' => 'In progress',
        'closed' => 'Closed',
        'overdue' => 'Overdue',
        'todayAt' => 'Today at %date%',
        'yesterdayAt' => 'Yesterday at %date%',
        'subject' => 'Subject',
        'lastReply' => 'Last reply',
        'priority' => 'Priority',
        'massAction' => 'Mass action',
        'noChange' => 'No change',
        'submit' => 'Submit',
        'delete' => 'Delete',
        'cancel' => 'Cancel',
        'general' => 'General',
        'reply' => 'Reply',
        'createdOn' => 'Created on %date%',
        'updatedOn' => 'Updated on %date%',
        'save' => 'Save',
        'to' => 'To',
        'quickInsert' => 'Quick insert',
        'attachments' => 'Attachments',
        'allowedFiles' => 'Allowed files',
        'browse' => 'Browse',
        'chooseFile' => 'Choose file',
        'quote' => 'Quote',
        'staff' => 'Staff',
        'uploadImage' => 'Upload image',
        'total' => 'Total',
        'download' => 'Download',
        'dropImageHere' => 'Drop image here to upload',
        'fullName' => 'Full name',
        'email' => 'Email address',
        'dateCreated' => 'Date Created',
        'createdBy' => 'Created by',
        'title' => 'Title',
        'message' => 'Message',
        'specialTags' => 'Special tags',
        'clientName' => 'Client name',
        'clientEmail' => 'Client e-mail address',
        'goBack' => 'Go back',
        'type' => 'Type',
        'public' => 'Public',
        'private' => 'Private',
        'action' => 'Action',
        'categoryName' => 'Category name',
        'parentCategory' => 'Parent category',
        'rootCategory' => 'Root category',
        'view' => 'View',
        'all' => 'All',
        'views' => 'Views',
        'displayOrder' => 'Display Order',
        'beginningList' => 'At the beginning of the list',
        'endList' => 'At the end of the list',
        'afterItem' => 'After %item%',
        'notModify' => 'Do not modify',
        'never' => 'Never',
        'active' => 'Active',
        'locked' => 'Locked',
        'leaveBlankNotChange' => 'Leave it in blank to don\'t change it.',
        'yes' => 'Yes',
        'no' => 'No',
        'enable' => 'Enable',
        'disable' => 'Disable',
        'default' => 'Default',
        'setDefault' => 'Set default',
        'edit' => 'Edit',
        'emailName' => 'Email name',
        'none' => 'None',
        'signature' => 'Signature',
        'newPassword' => 'New password',
        'existingPassword' => 'Existing password',
        'confirm' => 'Confirm',
        'enterExistingPassword' => 'Enter your existing password.',
        'enterNewPassword' => 'Enter your new password.',
        'manage' => 'Manage',
        'avatar' => 'Avatar',
        'deleteAvatar' => 'Delete avatar',
        'user' => 'User',
    ],
    'error' => [
        'recordsNotFound' => 'Records not found.',
        'noItemsSelected' => 'You did not select any ticket.',
        'invalidCannedResponse' => 'Invalid canned response.',
        'ticketNotFound' => 'Ticket was not found.',
        'ticketNotPermission' => 'You don\'t have permissions to view this ticket.',
        'invalidDepartment' => 'Invalid department.',
        'invalidStatus' => 'Invalid status.',
        'invalidPriority' => 'Invalid priority.',
        'enterMessage' => 'Enter your message.',
        'enterValidEmail' => 'Enter a valid e-mail address.',
        'enterSubject' => 'Enter the subject.',
        'fileNotAllowed' => 'File is not allowed.',
        'fileBig' => 'File is too big. Maximum size is %size%',
        'enterTitle' => 'Enter the title',
        'enterCategoryName' => 'Enter category name.',
        'selectParentCategory' => 'Select a valid parent category.',
        'selectCategoryType' => 'Select category type.',
        'selectCategory' => 'Select a valid category.',
        'selectArticleType' => 'Select article type.',
        'enterContent' => 'Enter the content.',
        'enterDepartmentName' => 'Enter department name.',
        'selectDepartmentType' => 'Select a valid type of department.',
        'enterFullName' => 'Enter the full name.',
        'enterUsername' => 'Enter a valid username.',
        'usernameTaken' => 'Username is being used by other agent.',
        'emailTaken' => 'Email is being used by other user.',
        'selectTypeAccess' => 'Select a valid access type.',
        'enterPassword' => 'Enter a valid password, it must be at least 6 characters in length.',
        'selectLogo' => 'Select a valid image for logo.',
        'logoSize' => 'Logo is too big. Maximum size is %size%',
        'uploadingLogo' => 'Error uploading logo, try again.',
        'enterSiteName' => 'Enter the brand name.',
        'enterWindowTitle' => 'Enter the window title.',
        'enterPageSize' => 'Enter a valid page size.',
        'enterDateFormat' => 'Enter the date format.',
        'selectTimezone' => 'Select a valid timezone.',
        'selectCaptchaStatus' => 'Select captcha status.',
        'enterSiteKey' => 'Enter the site key.',
        'enterPrivateKey' => 'Enter the private key.',
        'enterMaxAttempts' => 'Enter a valid number for maximum login attempts.',
        'enterMinutesIpLocking' => 'Enter a valid number for minutes of IP locking.',
        'emailExists' => 'Email address already exists.',
        'selectOutgoing' => 'Select a valid type of outgoing email',
        'selectIncoming' => 'Select a valid type of incoming email',
        'emailTakenDepartment' => 'Other email has taken this support department.',
        'passwordsNotMatches' => 'The new passwords entered do not match.',
        'wrongExistingPassword' => 'Your existing password is incorrect.',
        'passwordTooShort' => 'The new password must be at least 6 characters in length.',
        'selectDepartment' => 'Select a department.',
        'departmentNotExist' => 'Selected department does not exist.'
    ],
    'twoFactor' => [
        'title' => 'Two-Factor Authentication',
        'info' => 'Protect your account with high security log in.',
        'downloadApp' => ' Download the app for android or %1%iPhone%0% and %2%iPad%0%',
        'secretKey' => 'Secret Key',
        'verificationCode' => 'Verification Code',
        'enter2FA' => 'Enter the 6 digits from your mobile App.',
        'backupCode' => 'Save this code!',
        'activate' => 'Activate Two-Factor Authentication',
        'deactivate' => 'Deactivate Two-Factor Authentication',
        'activated' => 'Two-Factor authentication has been activated.',
        'deactivated' => 'Two-Factor authentication was deactivated.',
        'error' => [
            'isActive' => 'Two-Factor authentication is already active.',
            'invalidCode' => 'Invalid verification code.',
            'invalidPassword' => 'Invalid password.'
        ]
    ]
];