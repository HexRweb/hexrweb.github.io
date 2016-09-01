---
page.title = "Plans"
---
<div class="container">
    <h1 class="center">HexR | Plans</h1>
    <p class="center flow-text">The table below gives a quick description of our "plans". They are just for your reference; <a class="modal-trigger btn flow-text waves-effect waves-light hexr-background" href="#request">Request a Website</a> for further discussion.</p>
    <table class="tg center flow-text bordered">
        <tr>
            <th class="normal">Feature</th>
            <th class="special-2">Basic</th>
            <th class="normal">Plus</th>
            <th class="special-2">Platinum</th>
        </tr>
        <tr>
            <td class="special">CMS</td>
            <td class="special">Wordpress<br>(Can use other upon request)</td>
            <td class="special">Wordpress(Can use other upon request)</td>
            <td class="special">Wordpress(Can use other upon request)</td>
        </tr>
        <tr>
            <td class="normal">Mail</td>
            <td class="special-2">Up to 10 names w/ autoforward</td>
            <td class="normal">Up to 10 names w/ autoforward<br></td>
            <td class="special-2">Google Apps Integration</td>
        </tr>
        <tr>
            <td class="special">Drive</td>
            <td class="special">OwnCloud Setup<br> (Google Drive for private domains)</td>
            <td class="special">OwnCloud Setup<br>(Google Drive for private domains)</td>
            <td class="special">OwnCloud Setup<br>(Google Drive for private domains)</td>
        </tr>
        <tr>
            <td class="normal">Domain<br>and Hosting</td>
            <td class="special-2">Free basic subdomain and hosting</td>
            <td class="normal">Domain setup w/ hosting provider</td>
            <td class="special-2">Domain setup w/ hosting provider</td>
        </tr>
        <tr>
            <td class="special">Other Features</td>
            <td class="special">Upon Request</td>
            <td class="special">Upon Request</td>
            <td class="special">Upon Request</td>
        </tr>
        <tr>
            <td class="normal">Price</td>
            <td class="special-2">$0.00</td>
            <td class="normal">$5.00 - $15.00 / month</td>
            <td class="special-2">Starting at $5 / user / month + domain</td>
        </tr>
    </table>
    <p class="flow-text center">These plans are just for reference. Please <a class="modal-trigger btn flow-text waves-effect waves-light hexr-background" href="#request">Request a Website</a> so we can discuss this more in depth.</p>
    <div id="request" class="modal">
        <div class="modal-content row black-text">
            <h4>Request a website!</h4>
            <p class="red-text">* denotes required field.</p>
            <form action="/request/post.php" method="post" class="col s12">
                <div class="row">
                    <div class="input-field col m6">
                        <i class="material-icons prefix">contacts</i>
                        <input id="first_name" name="first_name" type="text" class="validate" required />
                        <label for="first_name">First Name <a class="red-text">*</a></label>
                    </div>
                    <div class="input-field col m6">
                        <i class="material-icons prefix">contacts</i>
                        <input id="last_name" name="last_name" type="text" class="validate" required />
                        <label for="last_name">Last Name <a class="red-text">*</a></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" type="email" class="validate" required />
                        <label for="email">Email Address <a class="red-text">*</a></label>
                    </div>
                    <div class="input-field col m6">
                        <i class="material-icons prefix">phone</i>
                        <input id="phone" name="phone" type="tel" class="validate" required />
                        <label for="email">Phone Number <a class="red-text">*</a></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">subtitles</i>
                        <input id="organization" name="organization" type="text" class="validate" required />
                        <label for="organization">Organization Name <a class="red-text">*</a></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">web</i>
                        <input id="website" name="website" type="url" />
                        <label for="website">Organization Website (optional)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">message</i>
                        <textarea id="org-desc" name="org-desc" class="materialize-textarea" required></textarea>
                        <label for="org-desc">Briefly describe your organization <a class="red-text">*</a></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">view_list</i>
                        <textarea id="org-web-requirements" name="org-web-requirements" class="materialize-textarea" required></textarea>
                        <label for="org-web-requirements">Briefly describe what you need in your website <a class="red-text">*</a></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">assignment_ind</i>
                        <input type="number" id="num-employees" name="num-employees" class="validate" required />
                        <label for="num-employees">Employees<a class="red-text">*</a></label>
                    </div>
                    <div class="input-field col m4">
                        <i class="material-icons prefix">$</i>
                        <input type="number" id="income" name="income" class="validate" required />
                        <label for="profit">Income <a class="red-text">*</a></label>
                    </div>
                    <div class="input-field col m4">
                        <div class="switch">
                            <label>
                                For profit
                                <input type="checkbox" id="profit" name="profit" class="validate" required><span class="lever"></span>
                                Non profit
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 offset-m4 center">
                        <div class="g-recaptcha" data-sitekey="6Lck6AoTAAAAAM4SbZUBhzAx_M3zWqdPmQ-o9e24"></div>
                    </div>
                </div>
                <div class="row">
                    <input type="submit">
                    <input type="hidden" name="submitted" />
                </div>
            </form>
        </div>
    </div>
</div>
