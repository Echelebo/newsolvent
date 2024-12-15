<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>

<div class="wrapper" style="background-color: #e8f2f9;"><br />
    <table class="layout layout--no-gutter" style="width: 100%; height: 100%; border-collapse: collapse; table-layout: fixed; margin-left: auto; margin-right: auto; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffffff;" align="center">
        <tbody>
            {{ $header or '' }}
            
            <!-- Email Body -->
            
            <!-- Body content -->
            <tr>
                <td class="column" style="padding: 0; text-align: left; vertical-align: top; color: #60666d; font-size: 14px; line-height: 21px; font-family: sans-serif; width: 600px;"><br />
                    {{ Illuminate\Mail\Markdown::parse($slot) }}

                    
                </td>
            </tr>
            
            
            {{ $footer or '' }}
        </tbody>
    </table>
    <p>&nbsp;</p>
</div>

</body>
</html>