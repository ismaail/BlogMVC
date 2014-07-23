<?php
return array(
    'heading.categories' => 'Categories',
    'heading.lastPosts' => 'Last posts',
    'heading.userPosts' => '{username}\'s posts',
    'heading.blog' => 'Blog',
    'heading.pageNumber' => 'Page #{n}',
    'heading.pagination' => 'Pagination',
    'heading.newCategory' => 'Add category',
    'heading.editCategory' => 'Edit {category}',
    'heading.commentsAmount' => '{n} comment|{n} comments',
    'heading.yourPosts' => 'Your posts',
    'heading.options' => 'Options',
    'heading.help' => 'Help',
    'heading.application' => 'Application',
    'heading.cachedValues' => 'Cached values',
    'heading.statistics' => 'Statistics',
    'heading.serviceStatus' => 'Service Status',
    'heading.users' => 'Users',
    'heading.profile' => 'Profile',
    'heading.username' => 'Username',
    'heading.passwordUpdate' => 'Password update',
    'heading.suicideBoothSection' => 'The nullmighty plzdeleteme link',
    'heading.pleaseSignIn' => 'Please sign in',
    'heading.createNewUser' => 'Create new user',
    'heading.suicideBooth' => 'Suicide booth',
    'heading.httpError' => 'Error #{errorCode}',

    'pageTitle.site.login' => 'Login',
    'pageTitle.site.error' => 'Error #{errorCode}',
    'pageTitle.admin.index' => 'Admin panel',
    'pageTitle.admin.help' => 'Help',
    'pageTitle.admin.devHelp' => 'Extended help',
    'pageTitle.admin.status' => 'Application status',
    'pageTitle.admin.options' => 'Options',
    'pageTitle.category.index' => '{categoryTitle}',
    'pageTitle.category.list' => 'Categories',
    'pageTitle.category.dashboard' => 'Category dashboard',
    'pageTitle.category.edit' => 'Edit category {categoryTitle}',
    'pageTitle.category.new' => 'New category',
    'pageTitle.post.index' => 'Blog',
    'pageTitle.post.show' => '{postTitle}',
    'pageTitle.post.new' => 'New post',
    'pageTitle.post.edit' => 'Edit {postTitle}',
    'pageTitle.post.dashboard' => 'Posts management',
    'pageTitle.user.list' => 'Authors',
    'pageTitle.user.index' => '{username}\'s posts',
    'pageTitle.user.dashboard' => 'User management',
    'pageTitle.user.new' => 'New user',
    'pageTitle.user.profile' => 'Profile',
    'pageTitle.user.suicide' => 'Stop\'n\'Drop suicide booth',

    'control.manage' => 'Manage',
    'control.edit' => 'Edit',
    'control.delete' => 'Delete',
    'control.save' => 'Save',
    'control.publish' => 'Publish',
    'control.addNew' => 'Add new',
    'control.add' => 'Add',
    'control.new' => 'New',
    'control.submit' => 'Submit',
    'control.create' => 'Create',
    'control.createNew' => 'Create new',
    'control.flushCache' => 'Flush cache',
    'control.recalculateCounters' => 'Recalculate counters',
    'control.signIn' => 'Sign in',
    'control.deleteMyProfile' => 'Delete my profile',
    'control.view' => 'View',

    'link.backTo' => '&lt; Back to {pageTitle}',
    'link.navigation' => '&lt; Go to {location}',
    'link.backToMainFeed' => '&lt; Back to main feed',
    'link.backToCategories' => '&lt; Back to categories list',
    'link.backToPosts' => '&lt; Back to posts',
    'link.edit' => 'Edit',
    'link.more' => 'More...',
    'link.readMore' => 'Read more...',
    'link.thisPost' => 'This post',
    'link.here' => 'here',
    'link.link' => 'link',
    'link.login' => 'Login',
    'link.logout' => 'Logout',
    'link.adminPanel' => 'Admin panel',
    'link.blog' => 'Blog',
    'link.createNewPost' => 'Create new post',
    'link.suicideBooth' => 'Plz delete me',

    'text.category' => 'Category',
    'text.onTime' => 'on',
    'text.by' => 'by',
    'text.id' => 'ID',
    'text.name' => 'Name',
    'text.postCount' => 'Post count',
    'text.actions' => 'Actions',
    'text.noCategoriesFound' => 'No categories found :/',
    'text.noPostsYet' => 'No posts yet.',
    'text.commentThisPost' => 'Comment this post',
    'text.welcomeMessage' => 'Welcome on my blog',
    'text.sorryNoPostsYet' => 'Sorry, no posts yet',
    'text.profileGreeting' => 'Hi there, {username}!',
    'text.rss.defaultDescription' => '{appName} RSS feed.',
    'text.noRegisteredUsers' => 'System doesn\'t have registered users yet.',

    'paragraph.serviceStatusCache' => 'Data you are looking at may be cached. '.
        'Cache timeout is set to one minute for status data and to one hour '.
        'for statistics data. You can flush the cache manually, though:',
    'paragraph.userPostsAdminNotice' => 'You have written '.
        '{postCount} posts which received {commentCount} comments. '.
        'You can manage them through '.
        '<a href="{dashboardUrl}">posts dashboard</a>.',
    'paragraph.usersAdminNotice' => 'You can view basic info about registered '.
        'users and create new one <a href="{dashboardUrl}">here</a>.',
    'paragraph.userOptionsAdminNotice' => 'If you wish to change your '.
        'password or visit the suicide booth, you should proceed with this '.
        '<a href="{dashboardUrl}">link</a>.',
    'paragraph.serviceOptionsAdminNotice' => 'You also can modify some '.
        'service options (language and site name) '.
        '<a href="{optionsUrl}">here</a>.',
    'paragraph.helpAdminNotice' => 'You can view short note about using the '.
        'service <a href="{helpUrl}">here</a>.',
    'paragraph.suicideBoothWarning' => 'Clicking button below will delete '.
        'your profile with all of your posts. If you are completely, '.
        'undoubtly, 100% sure, just press the button below. If you are not, '.
        'just <a href="{backLink}" class="alert-link">go back</a>.',
    'paragraph.httpError' => 'Looks like there was some terrible error. If '.
        'you\'re sure you\'ve followed correct URL, please contact the site '.
        'owner.',

    'pagination.delimiter' => '...',
    'statistics.users.total' => 'Users',
    'statistics.categories.total' => 'Categories',
    'statistics.posts.total' => 'Posts, total',
    'statistics.posts.today' => 'Posts, today',
    'statistics.comments.total' => 'Comments, total',
    'statistics.comments.today' => 'Comments, today',

    'status.yiiVersion' => 'Yii version',
    'status.twigVersion' => 'Twig version',
    'status.phpVersion' => 'PHP version',
    'status.os' => 'Operating system',
    'status.uptime' => 'Uptime',
    'status.serverTime' => 'Server time',

    'timeInterval.ago' => '{interval} ago',
    'timeInterval.justNow' => 'just now',
    'timeInterval.seconds' => '{n} second|{n} seconds',
    'timeInterval.minutes' => '{n} minute|{n} minutes',
    'timeInterval.hours' => '{n} hour|{n} hours',
    'timeInterval.days' => '{n} day|{n} days',
    'timeInterval.months' => '{n} month|{n} months',
    'timeInterval.years' => '{n} year|{n} years',
    'category.postCount' => '{n} post|{n} posts',

    //'format.postDate' => 'MMM d y',
);