{extends file='checkout/_partials/steps/checkout-step.tpl'}

{block name='step_content'}

  {if $conditions_to_approve|count}
    <p class="ps-hidden-by-js">
      {* At the moment, we're not showing the checkboxes when JS is disabled
         because it makes ensuring they were checked very tricky and overcomplicates
         the template. Might change later.
      *}
      {l s='By confirming the order, you certify that you have read and agree with all of the conditions below:' d='Shop.Theme.Checkout'}
    </p>

    <form id="conditions-to-approve" method="GET">
      <ul>
        {foreach from=$conditions_to_approve item="condition" key="condition_name"}
          <li>
            <input  id    = "conditions_to_approve[{$condition_name}]"
                    name  = "conditions_to_approve[{$condition_name}]"
                    required
                    type  = "checkbox"
                    value = "1"
                    class = "ps-shown-by-js"
            >
            <label for="conditions_to_approve[{$condition_name}]">
              {$condition nofilter}
            </label>
          </li>
        {/foreach}
      </ul>
    </form>
  {/if}

  <div class="payment-options">
    {foreach from=$payment_options item="module_options"}
      {foreach from=$module_options item="option"}
        <div width='100%'>
          <div id="{$option.id}-container" class="payment-option">

            {* This is the way an option should be selected when Javascript is enabled *}
            <input class="ps-shown-by-js" id="{$option.id}" type="radio" name="payment-option" required {if $selected_payment_option == $option.id} checked {/if}>
            {* This is the way an option should be selected when Javascript is disabled *}
            <form method="GET" class="ps-hidden-by-js">
              {if $option.id === $selected_payment_option}
                {l s='Selected' d='Shop.Theme.Checkout'}
              {else}
                <button class="ps-hidden-by-js" type="submit" name="select_payment_option" value="{$option.id}">
                  {l s='Choose' d='Shop.Theme.Actions'}
                </button>
              {/if}
            </form>

            <label for="{$option.id}">
              <span>{$option.call_to_action_text}</span>
              {if $option.logo}
                <img src="{$option.logo}">
              {/if}
            </label>

          </div>
        </div>

        {if $option.additionalInformation}
          <div
            id="{$option.id}-additional-information"
            class="js-additional-information {if $option.id != $selected_payment_option} ps-hidden {/if}"
          >
            {$option.additionalInformation nofilter}
          </div>
        {/if}

        <div
          id="pay-with-{$option.id}-form"
          class="js-payment-option-form {if $option.id != $selected_payment_option} ps-hidden {/if}"
        >
          {if $option.form}
            {$option.form nofilter}
          {else}
            <form id="payment-form" method="POST" action="{$option.action nofilter}">
              {foreach from=$option.inputs item=input}
                <input type="{$input.type}" name="{$input.name}" value="{$input.value}">
              {/foreach}
              <button style="display:none" id="pay-with-{$option.id}" type="submit"></button>
            </form>
          {/if}
        </div>
      {/foreach}
    {foreachelse}
      <p class="warning">{l s='Unfortunately, there are no payment method available.' d='Shop.Theme.Checkout'}</p>
    {/foreach}
  </div>

  <div id="payment-confirmation">
    <div class="ps-shown-by-js">
      <button type="submit" {if !$selected_payment_option} disabled {/if}>
        {l s='Order with an obligation to pay' d='Shop.Theme.Actions'}
      </button>
      {if $show_final_summary}
        <article class="notification notification-danger js-alert-payment-conditions" role="alert" data-alert="danger">
          {l
            s='Please make sure you\'ve chosen a [1]payment method[/1] and accepted the [2]terms and conditions[/2].'
            sprintf=[
            '[1]' => '<a href="#checkout-payment-step">',
            '[/1]' => '</a>',
            '[2]' => '<a href="#conditions-to-approve">',
            '[/2]' => '</a>'
            ]
            d='Shop.Theme.Checkout'
          }
        </article>
      {/if}
    </div>
    <div class="ps-hidden-by-js">
      {if $selected_payment_option and $all_conditions_approved}
        <label for="pay-with-{$selected_payment_option}">{l s='Order with an obligation to pay' d='Shop.Theme.Actions'}</label>
      {/if}
    </div>
  </div>
{/block}
