Step-by-step guide to create an OAuth 2.0 Client ID for Google login integration:

STEP 1: Go to Google Developer Console
Open: https://console.developers.google.com/


STEP 2: Create a New Project
1. Click the dropdown at the top where your project name is.
2. Click "New Project".
3. Enter:
   - Project Name: e.g., `ParentPortal Auth`
   - Leave the location as default (or choose if needed).
4. Click Create.
5. Wait a few seconds then click"Select Project" when it appears.


STEP 3: Enable Google APIs
1. In the left sidebar, go to "APIs & Services" > Library.
2. Search for and enable the following:
   - `Google+ API` (optional) or `People API` *(recommended for newer apps)*.
3. Click on the API → click **Enable**.

---

 STEP 4: Create OAuth 2.0 Credentials
1. Go to **"APIs & Services" > Credentials**.
2. Click **“+ CREATE CREDENTIALS”** > **OAuth client ID**.
3. If prompted to **configure OAuth consent screen**, do that first:

---

 Configure OAuth Consent Screen (if asked)
1. Choose **"External"** and click **Create**.
2. Fill out:
   - **App Name**: e.g., `Parent Portal`
   - **User Support Email**: your email
   - **Developer Contact Info**: your email again
3. Click **Save and Continue** for Scopes and Test Users (you can leave them blank).
4. On the last screen, click **Back to Dashboard**.



  STEP 5: Create OAuth Client ID
1. Now back on **Credentials > Create Credentials > OAuth client ID**:
2. Choose **Application Type** → Select: `Web application`.
3. Fill in:
   - **Name**: e.g., `Parent Portal Web`
   - **Authorized JavaScript origins**: e.g.,
     ```
     http://localhost
     http://localhost/yourproject
     ```
   - **Authorized redirect URIs**: e.g.,
     ```
     http://localhost/yourproject/google-callback.php
     ```
4. Click **Create**.

---

STEP 6: Copy Your Credentials
- You’ll be shown:
  - **Client ID**
  - **Client Secret**
- Copy both and **store them safely**.

These are what you’ll use in your PHP code (`google-login.php`, `google-callback.php`).

---

Facebook: 



 Step-by-Step: Set Up Facebook Login

 Step 1: Go to [https://developers.facebook.com/apps](https://developers.facebook.com/apps)

1. Login using your Facebook account.
2. Click the **“Create App”** button (top right).
3. Choose **“Consumer”** → Click **Next**.
4. App name:  
   Example:
   ```
   ParentPortal Facebook Auth
   ```
5. Fill in your email, then click **Create App**.
6. Complete the security check.

---

 Step 2: Add Facebook Login to Your App

1. After app creation, in the dashboard, click **“Set Up”** under **Facebook Login**.
2. Choose **"Web"** as your platform.
3. Enter your **site URL**:  
   ```
   http://localhost/parentportal/
   ```
   Click **Save** and **Continue**.



Step 3: Configure Valid OAuth Redirect URI

1. Go to **Settings > Basic** and **Settings > Advanced** (on the left sidebar).
2. Then go to:  
   **Facebook Login > Settings** (sidebar under Products).
3. Under **Valid OAuth Redirect URIs**, add:

```
http://localhost/parentportal/fb-callback.php
```

> This is the PHP file that will handle the login response (like `google-callback.php`).

4. Click **Save Changes**.

---

 Step 4: Get App ID and App Secret

- Go to **Settings > Basic**.
- You’ll find:
  - **App ID**
  - **App Secret** (Click “Show” and confirm your Facebook password)



🔐 You now have:
- **App ID** for Facebook
- **App Secret**
- A redirect URI: `http://localhost/parentportal/fb-callback.php`


