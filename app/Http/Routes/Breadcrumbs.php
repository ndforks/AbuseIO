<?php

Breadcrumbs::register('admin.home.index', function ($breadcrumbs) {
    $breadcrumbs->push(trans('misc.sidemenu.home'), route('admin.home.index'));
});

/*
 * Top Menu Item: Accounts
 */
Breadcrumbs::register('admin.accounts.index', function ($breadcrumbs) {
    $breadcrumbs->push(trans('misc.topmenu.accounts'), route('admin.accounts.index'));
});

Breadcrumbs::register('admin.accounts.show', function ($breadcrumbs, $account) {
    $breadcrumbs->parent('admin.accounts.index');
    $breadcrumbs->push($account->name, route('admin.accounts.show', $account->id));
});

Breadcrumbs::register('admin.accounts.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.accounts.index');
    $breadcrumbs->push(trans('accounts.header.new'), route('admin.accounts.create'));
});

Breadcrumbs::register('admin.accounts.edit', function ($breadcrumbs, $account) {
    $breadcrumbs->parent('admin.accounts.show', $account);
    $breadcrumbs->push(trans('accounts.header.edit'), route('admin.accounts.edit', $account->id));
});

/*
 * Top Menu Item: Brands
 */
Breadcrumbs::register('admin.brands.index', function ($breadcrumbs) {
    $breadcrumbs->push(trans('misc.topmenu.brands'), route('admin.brands.index'));
});

Breadcrumbs::register('admin.brands.show', function ($breadcrumbs, $brand) {
    $breadcrumbs->parent('admin.brands.index');
    $breadcrumbs->push($brand->name, route('admin.brands.show', $brand->id));
});

Breadcrumbs::register('admin.brands.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.brands.index');
    $breadcrumbs->push(trans('brands.header.new'), route('admin.brands.create'));
});

Breadcrumbs::register('admin.brands.edit', function ($breadcrumbs, $brand) {
    $breadcrumbs->parent('admin.brands.show', $brand);
    $breadcrumbs->push(trans('brands.header.edit'), route('admin.brands.edit', $brand->id));
});

/*
 * Top Menu Item: Users
 */
Breadcrumbs::register('admin.users.index', function ($breadcrumbs) {
    $breadcrumbs->push(trans('misc.topmenu.users'), route('admin.users.index'));
});

Breadcrumbs::register('admin.users.show', function ($breadcrumbs, $user) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push($user->first_name.' '.$user->last_name, route('admin.users.show', $user->id));
});

Breadcrumbs::register('admin.users.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push(trans('users.header.new'), route('admin.users.create'));
});

Breadcrumbs::register('admin.users.edit', function ($breadcrumbs, $user) {
    $breadcrumbs->parent('admin.users.show', $user);
    $breadcrumbs->push(trans('users.header.edit'), route('admin.users.edit', $user->id));
});

/*
 * Top Menu Item: System
 */
Breadcrumbs::register('admin.profile.index', function ($breadcrumbs) {
    $breadcrumbs->push(trans('misc.topmenu.profile'), route('admin.profile.index'));
});

/*
 * Side Menu Item: Contacts
 */
Breadcrumbs::register('admin.contacts.index', function ($breadcrumbs) {
    $breadcrumbs->push(trans('misc.sidemenu.contacts'), route('admin.contacts.index'));
});

Breadcrumbs::register('admin.contacts.show', function ($breadcrumbs, $contact) {
    $breadcrumbs->parent('admin.contacts.index');
    $breadcrumbs->push($contact->name, route('admin.contacts.show', $contact->id));
});

Breadcrumbs::register('admin.contacts.edit', function ($breadcrumbs, $contact) {
    $breadcrumbs->parent('admin.contacts.show', $contact);
    $breadcrumbs->push(trans('contacts.header.edit'), route('admin.contacts.edit', $contact->id));
});

/*
 * Side Menu Item: Netblocks
 */
Breadcrumbs::register('admin.netblocks.index', function ($breadcrumbs) {
    $breadcrumbs->push(trans('misc.sidemenu.netblocks'), route('admin.netblocks.index'));
});

Breadcrumbs::register('admin.netblocks.show', function ($breadcrumbs, $netblock) {
    $breadcrumbs->parent('admin.netblocks.index');
    $breadcrumbs->push($netblock->description, route('admin.netblocks.show', $netblock->id));
});

Breadcrumbs::register('admin.netblocks.edit', function ($breadcrumbs, $netblock) {
    $breadcrumbs->parent('admin.netblocks.show', $netblock);
    $breadcrumbs->push(trans('netblocks.header.edit'), route('admin.netblocks.edit', $netblock->id));
});

/*
 * Side Menu Item: Domains
 */
Breadcrumbs::register('admin.domains.index', function ($breadcrumbs) {
    $breadcrumbs->push(trans('misc.sidemenu.domains'), route('admin.domains.index'));
});

Breadcrumbs::register('admin.domains.show', function ($breadcrumbs, $domain) {
    $breadcrumbs->parent('admin.domains.index');
    $breadcrumbs->push($domain->name, route('admin.domains.show', $domain->id));
});

Breadcrumbs::register('admin.domains.edit', function ($breadcrumbs, $domain) {
    $breadcrumbs->parent('admin.domains.show', $domain);
    $breadcrumbs->push(trans('domains.header.edit'), route('admin.domains.edit', $domain->id));
});

/*
 * Side Menu Item: Tickets
 */
Breadcrumbs::register('admin.tickets.index', function ($breadcrumbs) {
    $breadcrumbs->push(trans('misc.sidemenu.tickets'), route('admin.tickets.index'));
});

Breadcrumbs::register('admin.tickets.show', function ($breadcrumbs, $ticket) {
    $breadcrumbs->parent('admin.tickets.index');
    $breadcrumbs->push($ticket->id, route('admin.tickets.show', $ticket->id));
});

Breadcrumbs::register('admin.tickets.edit', function ($breadcrumbs, $ticket) {
    $breadcrumbs->parent('admin.tickets.show', $ticket);
    $breadcrumbs->push(trans('tickets.header.edit'), route('admin.tickets.edit', $ticket->id));
});

/*
 * Side Menu Item: Analytics
 */
Breadcrumbs::register('admin.analytics.index', function ($breadcrumbs) {
    $breadcrumbs->push(trans('misc.sidemenu.analytics'), route('admin.analytics.index'));
});