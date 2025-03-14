Below is the complete `README.md` file in Markdown format that you can copy and use directly:

```markdown
# Conversion Events Service

This project provides a production-ready implementation for tracking and sending conversion events via the Facebook Conversions API. It includes two main service classes:

- **ConversionEventService** – Contains helper methods to build event payloads and track various events (e.g., Login, Purchase, etc.).
- **FacebookConversionService** – Handles sending event data to Facebook and performs the required SHA-256 hashing on sensitive user information.

Both classes are designed with clear inline hints and PHPDoc comments that list the expected parameters and their descriptions.

---

## Table of Contents

- [Overview](#overview)
- [Configuration](#configuration)
- [Usage](#usage)
- [Event Parameters](#event-parameters)
  - [Body Parameters](#body-parameters)
  - [Customer Information Parameters](#customer-information-parameters)
  - [Server Event Parameters](#server-event-parameters)
  - [App Data Parameters](#app-data-parameters)
  - [Original Event Data Parameters](#original-event-data-parameters)
- [Default (Standard) Events](#default-standard-events)
- [Object Properties](#object-properties)
- [Contributing](#contributing)
- [License](#license)

---

## Overview

The Conversion Events Service simplifies the integration of the Facebook Conversions API into your Laravel project. It provides pre-built methods for tracking common events, ensures proper data hashing (when required), and supports a wide range of event parameters.

---

## Configuration

Before using the service, make sure that your configuration file (e.g., `config/facebook.php`) is set up with your Facebook credentials:

```php
return [
    'pixel_id'     => env('FACEBOOK_PIXEL_ID', 'your_pixel_id_here'),
    'access_token' => env('FACEBOOK_ACCESS_TOKEN', 'your_access_token_here'),
];
```

---

## Usage

The services are designed to be injected via Laravel's dependency injection. Below is an example of how you might use the `ConversionEventService` in a controller:

```php
use App\Services\ConversionEventService;

class SomeController extends Controller
{
    protected ConversionEventService $conversionService;

    public function __construct(ConversionEventService $conversionService)
    {
        $this->conversionService = $conversionService;
    }

    public function someAction()
    {
        // HINT:
        // - $userData: Provide keys like 'em', 'ph', 'fn', 'ln', etc. (hashing applied automatically where needed).
        // - $customData: Provide event-specific parameters like 'currency', 'value', 'content_ids', etc.
        $response = $this->conversionService->trackPurchase(
            ['em' => 'user@example.com', 'ph' => '1234567890'],
            ['currency' => 'USD', 'value' => 99.99]
        );

        // Process $response as needed...
    }
}
```

Each event function includes inline hints describing which parameters to pass.

---

## Event Parameters

### Body Parameters
- **data:** The main container for all event data.
- **test_event_code:** (Optional) A code to mark the event as a test event.

### Customer Information Parameters
These parameters are used to identify the customer. Hashing is required for most keys (using SHA-256), except where noted.
- **em:** Email — *Hashing required*
- **ph:** Phone Number — *Hashing required*
- **fn:** First Name — *Hashing required*
- **ln:** Last Name — *Hashing required*
- **ge:** Gender — *Hashing required*
- **db:** Date of Birth — *Hashing required*
- **ct:** City — *Hashing required*
- **st:** State — *Hashing required*
- **zp:** Zip Code — *Hashing required*
- **country:** Country — *Hashing required*
- **external_id:** External ID — *Hashing recommended*
- **client_ip_address:** Client IP Address — *Do not hash*
- **client_user_agent:** Client User Agent — *Do not hash*
- **fbc:** Click ID — *Do not hash*
- **fbp:** Browser ID — *Do not hash*
- **subscription_id:** Subscription ID — *Do not hash*
- **fb_login_id:** Facebook Login ID — *Do not hash*
- **lead_id:** Lead ID — *Do not hash*
- **anon_id:** Install ID — *Do not hash (for app events only)*
- **madid:** Mobile Advertiser ID — *Do not hash (for app events only)*
- **page_id:** Page ID — *Do not hash*
- **page_scoped_user_id:** Page scoped user ID — *Do not hash*
- **ctwa_clid:** Click to WhatsApp ID — *Do not hash*
- **ig_account_id:** IG account ID — *Do not hash*
- **ig_sid:** Click to Instagram ID — *Do not hash*

### Server Event Parameters
These parameters are sent with each event payload:
- **event_name**
- **event_time**
- **user_data**
- **custom_data**
- **event_source_url**
- **opt_out**
- **event_id**
- **action_source**
- **data_processing_options**
- **data_processing_options_country**
- **data_processing_options_state**
- **referrer_url**

### App Data Parameters
Used primarily for app events:
- **advertiser_tracking_enabled**
- **application_tracking_enabled**
- **extinfo**
- **campaign_ids**
- **install_referrer**
- **installer_package**
- **url_schemes**
- **windows_attribution_id**
- **anon_id**
- **madid**
- **vendor_id**

### Original Event Data Parameters
Additional parameters available for event data:
- **event_name**
- **event_time**
- **order_id**
- **event_id**

---

## Default (Standard) Events

These events can also be tracked with the Meta Pixel's `fbq('track')` function when used alongside the Conversions API. It is recommended to include the `eventID` parameter as a fourth parameter to the function.

| **Event Name**           | **Description**                                                                                  | **Object Properties**                                                                          | **Promoted Object custom_event_type**             |
|--------------------------|--------------------------------------------------------------------------------------------------|------------------------------------------------------------------------------------------------|---------------------------------------------------|
| **AddPaymentInfo**       | When payment information is added in the checkout flow. A person clicks on a save billing button. | content_ids, contents, currency, value *(Optional)*                                            | ADD_PAYMENT_INFO                                  |
| **AddToCart**            | When a product is added to the shopping cart. A person clicks on an add to cart button.            | content_ids, content_type, contents, currency, value *(Optional; Required for Advantage+ catalog ads: contents)* | ADD_TO_CART                                       |
| **AddToWishlist**        | When a product is added to a wishlist. A person clicks on an add to wishlist button.                | content_ids, contents, currency, value *(Optional)*                                            | ADD_TO_WISHLIST                                   |
| **CompleteRegistration** | When a registration form is completed. A person submits a subscription or signup form.             | currency, value *(Optional)*                                                                     | COMPLETE_REGISTRATION                             |
| **Contact**              | When a person initiates contact with your business (via phone, SMS, email, chat, etc.).             | *(None specified)*                                                                             | CONTACT                                           |
| **CustomizeProduct**     | When a person customizes a product (e.g., selects a t-shirt color).                                | *(None specified)*                                                                             | CUSTOMIZE_PRODUCT                                 |
| **Donate**               | When a person donates funds to your organization or cause. A person adds a donation to their cart.  | *(None specified)*                                                                             | *(None specified)*                                |
| **FindLocation**         | When a person searches for a location of your store via a website or app, intending to visit.        | *(None specified)*                                                                             | FIND_LOCATION                                     |
| **InitiateCheckout**     | When a person enters the checkout flow. A person clicks on a checkout button.                     | content_ids, contents, currency, num_items, value *(Optional)*                                   | INITIATE_CHECKOUT                                 |
| **Lead**                 | When a sign-up is completed. A person clicks on pricing.                                          | currency, value *(Optional)*                                                                     | LEAD                                              |
| **Purchase**             | When a purchase is made or the checkout flow is completed. A person lands on a thank you page.      | content_ids, content_type, contents, currency, num_items, value *(Required: currency and value; Required for Advantage+ catalog ads: contents or content_ids)* | PURCHASE                                          |
| **Schedule**             | When a person books an appointment to visit one of your locations.                               | *(None specified)*                                                                             | SCHEDULE                                          |
| **Search**               | When a search is made on your website. A person searches for a product.                           | content_ids, content_type, contents, currency, search_string, value *(Optional; Required for Advantage+ catalog ads: contents or content_ids)* | SEARCH                                            |
| **StartTrial**           | When a person starts a free trial of your product/service.                                       | currency, predicted_ltv, value *(Optional)*                                                    | START_TRIAL                                       |
| **SubmitApplication**    | When a person applies for a product, service, or program (e.g., credit card, educational program). | *(None specified)*                                                                             | SUBMIT_APPLICATION                                |
| **Subscribe**            | When a person subscribes to a paid subscription for your product/service.                        | currency, predicted_ltv, value *(Optional)*                                                    | SUBSCRIBE                                         |
| **ViewContent**          | When a user visits a page you care about (e.g., a product details or landing page).               | content_ids, content_type, contents, currency, value *(Optional; Required for Advantage+ catalog ads: contents or content_ids)* | VIEW_CONTENT                                      |

---

## Object Properties

When sending event parameters, you may also include the following predefined object properties in your custom event data (formatted as JSON):

- **content_category**
    - **Type:** String
    - **Description:** Category of the page/product. *(Optional)*

- **content_ids**
    - **Type:** Array of integers or strings
    - **Description:** Product IDs associated with the event, such as SKUs (e.g., `['ABC123', 'XYZ789']`).

- **content_name**
    - **Type:** String
    - **Description:** Name of the page/product. *(Optional)*

- **content_type**
    - **Type:** String
    - **Description:** Either `product` or `product_group` depending on whether the IDs refer to individual products or product groups.
    - **Note:** If no `content_type` is provided, Meta will match the event to every item with the same ID, regardless of type.

- **contents**
    - **Type:** Array of objects
    - **Description:** An array of JSON objects that include at least `id` and `quantity` fields.
    - **Example:** `[{'id': 'ABC123', 'quantity': 2}, {'id': 'XYZ789', 'quantity': 2}]`.

- **currency**
    - **Type:** String
    - **Description:** The currency code for the value specified (e.g., 'USD').

- **num_items**
    - **Type:** Integer
    - **Description:** The number of items involved, typically used with the `InitiateCheckout` event.

- **predicted_ltv**
    - **Type:** Integer or Float
    - **Description:** Predicted lifetime value of a subscriber as defined by the advertiser.

- **search_string**
    - **Type:** String
    - **Description:** The search term entered by the user (used with the Search event).

- **status**
    - **Type:** Boolean
    - **Description:** Used with the `CompleteRegistration` event to indicate registration status. *(Optional)*

- **value**
    - **Type:** Integer or Float
    - **Description:** The monetary value associated with the event.

---

## Contributing

Contributions, improvements, or suggestions are welcome. Please open an issue or submit a pull request on GitHub.

---

## License

This project is licensed under the [MIT License](LICENSE).

---

*For more detailed guidance, please refer to the official Meta (Facebook) documentation on the Conversions API and Meta Pixel integration.*
```

You can now copy the entire content above and add it to your project as your `README.md` file.
